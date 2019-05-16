const got = require('got')

async function _fetchBreed(breedid) {
  const result = JSON.parse(
    (await got(`https://get.ponyisland.net?breed=${breedid}`, {
      responseType: 'json',
    })).body
  )
  console.dir(result)
  return result
}

async function _fetchPony(ponyid) {
  const result = JSON.parse(
    (await got(`https://get.ponyisland.net?pony=${ponyid}`, {
      responseType: 'json',
    })).body
  )
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

module.exports = { fetchPony }
