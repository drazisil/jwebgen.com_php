const got = require("got")

async function handlePonyLookup(req, res) {
    console.log('In ponyLookup')
    const {ponyid} = req.query
    const result = JSON.parse((await got(`https://get.ponyisland.net?pony=${ponyid}`, {
      responseType: 'json',
    })).body)
    console.dir(result)
    return result

    // return res.status(500).send(`ponyLookup not implemented`)

}

const handlers = {
  'ponyLookup': handlePonyLookup
}

async function handleController(req, res) {
  console.dir(req.query)

  const { nextAction } = req.query

  if (typeof handlers[nextAction] == "function") {
    return await handlers[nextAction](req, res)
  }
  
res.status(500).send(`nextAction ${nextAction} not implemented`)
  
}

module.exports = { handleController }
