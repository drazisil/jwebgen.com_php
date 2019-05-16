function handlePonyLookup(req, res) {
  console.log('In ponyLookup')
  return res.status(500).send(`ponyLookup not implemented`)
}

const handlers = {
  'ponyLookup': handlePonyLookup
}

function handleController(req, res) {
  console.dir(req.query)

  const { nextAction } = req.query

  if (typeof handlers[nextAction] == "function") {
    return handlers[nextAction](req, res)
  }
  
res.status(500).send(`nextAction ${nextAction} not implemented`)
  
}

module.exports = { handleController }
