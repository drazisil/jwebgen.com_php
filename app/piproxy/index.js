const ky = require('ky-universal')
const db = require('../database')

async function _fetchBreedFromPI(breedid) {
  const result = await ky(`https://get.ponyisland.net?breed=${breedid}`).json()
  return result
}

async function _fetchGeneFromPI(geneid) {
  const result = await ky(`https://get.ponyisland.net?gene=${geneid}`).json()
  return result
}

async function _fetchPonyFromPI(ponyid) {
  const result = await ky(`https://get.ponyisland.net?pony=${ponyid}`).json()
  return result
}

// Example pony: 34816503

async function fetchPony(ponyid) {
  const pony = await _fetchPonyFromPI(ponyid)
  pony['BreedID'] = (await _fetchBreedFromPI(pony['BreedID']))['Name']
  delete pony['OwnerID']
  delete pony['Level']
  delete pony['Skills']
  delete pony['Inbreeding']
  console.dir(pony)
  return pony
}

async function _fetchBreedListFromPI() {
  let breedid = 1
  let breedListComplete = false
  let breedList = []
  while (breedListComplete === false) {
    breed = await _fetchBreedFromPI(breedid)
    if (breed['Name'] === null) {
      breedListComplete = true
      _updateBreedList(breedList)
      return breedList
    }
    breedList.push(breed)
    breedid++
  }
}

async function fetchBreedList() {
  // Check if breed list exists in database
  const breedList = await _fetchBreedListFromDB()
  if (breedList.length > 0) {
    console.log(`Fetched breedList from DB with ${breedList.length} rows.`)
    return breedList
  }

  // If not, fetch and populate it
  return _fetchBreedListFromPI()
}

async function _updateBreedList(breedList) {
  await Promise.all(
    breedList.map(async breed => {
      try {
        await db.run(
          'INSERT OR REPLACE INTO breeds (`id`, `name`) VALUES (?, ?)',
          [breed['ID'], breed['Name']]
        )
      } catch (error) {
        throw error
      }
    })
  )
  console.log(`Updated breed list in database`)
}

async function _updateGeneList(geneList) {
  await Promise.all(
    geneList.map(async gene => {
      try {
        await db.run(
          'INSERT OR REPLACE INTO genes (`id`, `name`) VALUES (?, ?)',
          [gene['ID'], gene['Name']]
        )
      } catch (error) {
        throw error
      }
    })
  )
  console.log(`Updated gene list in database`)
}

async function _fetchBreedListFromDB() {
  try {
    return await db.all('SELECT * FROM breeds', [])
  } catch (error) {
    throw error
  }
}

async function _fetchGeneListFromDB() {
  try {
    return await db.all('SELECT * FROM genes', [])
  } catch (error) {
    throw error
  }
}

async function _fetchGeneListFromPI() {
  let geneid = 1
  let geneListComplete = false
  let geneList = []
  while (geneListComplete === false) {
    gene = await _fetchGeneFromPI(geneid)
    if (gene['Name'] === null) {
      geneListComplete = true
      _updateGeneList(geneList)
      return geneList
    }
    geneList.push(gene)
    geneid++
  }
}

async function fetchGeneList() {
  // Check if gene list is in db
  const geneList = await _fetchGeneListFromDB()
  if (geneList.length > 0) {
    console.log(`Fetched geneList from DB with ${geneList.length} rows.`)
    return geneList
  }

  // If not, fetch and populate it
  return _fetchGeneListFromPI()
}

module.exports = { fetchBreedList, fetchGeneList, fetchPony }
