const express = require('express')
const {
  handleController,
  handleIndex,
  handleLookup,
  renderPony,
} = require('./src/index')
const app = express()
const expressNunjucks = require('express-nunjucks')
var cors = require('cors')

const isDev = app.get('env') === 'development'
const port = 3000

var options = {
  dotfiles: 'ignore',
  etag: false,
  extensions: ['htm', 'html'],
  maxAge: '1d',
  redirect: false,
  setHeaders: function(res, path, stat) {
    res.set('x-timestamp', Date.now())
  },
}

app.use(cors())

app.set('views', __dirname + '/templates')

app.set('view engine', 'njk')
const njk = expressNunjucks(app, {
  watch: isDev,
  noCache: isDev,
})

app.use(function(req, res, next) {
  console.log(`Requested: ${req.url} via ${req.method}`)
  next() // pass control to the next handler
})

app.use(function(err, req, res, next) {
  console.error(err.stack)
  res.status(500).send('Something broke!')
})

app.get('/', handleIndex)

app.get('/lookup', handleLookup)

app.get('/pony', renderPony)

app.use(express.static('public', options))
app.use(express.static('src', options))

app.get('/controller', handleController)

app.use(function(req, res, next) {
  console.log(`Unable to locate: ${req.url} via ${req.method}`)
  res.status(404).send("Sorry can't find that!")
})

const server = app.listen(port, () =>
  console.log(`Example app listening on port ${port}!`)
)

process.once('SIGUSR2', function() {
  server.close(function() {
    process.kill(process.pid, 'SIGUSR2')
  })
})
