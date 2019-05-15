function handleController(req, res) {
  console.dir(req.query)
  res.status(500).send(`nextAction ${req.query['nextAction']} not implemented`)
}

module.exports = { handleController }
