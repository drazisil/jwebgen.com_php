const { fetchBreedList, fetchGeneList, fetchPony } = require('./piproxy')

async function handleBreedList(req, res) {
  console.log('In breedList')
  const breedList = await fetchBreedList()
  res.send(breedList)

  // return res.status(500).send(`ponyLookup not implemented`)
}

async function handleGeneList(req, res) {
  console.log('In geneList')
  const geneList = await fetchGeneList()
  res.send(geneList)

  // return res.status(500).send(`ponyLookup not implemented`)
}

async function handlePonyLookup(req, res) {
  console.log('In ponyLookup')
  const { ponyid } = req.query
  const pony = await fetchPony(ponyid)
  res.send(pony)

  // return res.status(500).send(`ponyLookup not implemented`)
}

const handlers = {
  ponyLookup: handlePonyLookup,
}

async function handleController(req, res) {
  console.dir(req.query)

  const { nextAction } = req.query

  if (typeof handlers[nextAction] == 'function') {
    return await handlers[nextAction](req, res)
  }

  res.status(500).send(`nextAction ${nextAction} not implemented`)
}

async function handleIndex(req, res) {
  res.render('index', { title: 'Hey', message: 'Hello there!', name: 'Foo' })
}

async function handleLookup(req, res) {
  res.render('lookup', { title: 'Hey', message: 'Hello there!', name: 'Foo' })
}

async function renderPony(req, res) {
  const { ponyid } = req.query
  const pony = await fetchPony(ponyid)
  res.send(pony)
}

module.exports = {
  handleBreedList,
  handleGeneList,
  handleController,
  handleIndex,
  handleLookup,
  renderPony,
}
