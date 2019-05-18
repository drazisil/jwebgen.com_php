const ky = require('ky-universal')

async function _fetchBreed(breedid) {
  const result = await ky(`https://get.ponyisland.net?breed=${breedid}`).json()
  console.dir(result)
  return result
}

async function _fetchGene(geneid) {
  const result = await ky(`https://get.ponyisland.net?gene=${geneid}`).json()
  console.dir(result)
  return result
}

async function _fetchPony(ponyid) {
  const result = await ky(`https://get.ponyisland.net?pony=${ponyid}`).json()
  return result
}

// Example pony: 34816503

async function fetchPony(ponyid) {
  const pony = await _fetchPony(ponyid)
  pony['BreedID'] = (await _fetchBreed(pony['BreedID']))['Name']
  delete pony['OwnerID']
  delete pony['Level']
  delete pony['Skills']
  delete pony['Inbreeding']
  console.dir(pony)
  return pony
}

async function fetchBreedList() {
  let breedid = 1
  let breedListComplete = false
  let breedList = []
  while (breedListComplete === false) {
    breed = await _fetchBreed(breedid)
    if (breed['Name'] === null) {
      breedListComplete = true
      return breedList
    }
    breedList.push(breed)
    breedid++
  }
  return breedList
}

async function fetchGeneList() {
  let geneid = 1
  let geneListComplete = false
  let geneList = []
  while (geneListComplete === false) {
    gene = await _fetchGene(geneid)
    if (gene['Name'] === null) {
      geneListComplete = true
      return geneList
    }
    geneList.push(gene)
    geneid++
  }
  return geneList
}

module.exports = { fetchBreedList, fetchGeneList, fetchPony }
