const sqlite3 = require('sqlite3').verbose()
const db = new sqlite3.Database('./database.sqlite')

db.run(
  'CREATE TABLE IF NOT EXISTS `genes` (id INTEGER, name TEXT, PRIMARY KEY(id))'
)

db.run(
  'CREATE TABLE IF NOT EXISTS `breeds` (id INTEGER, name TEXT, PRIMARY KEY(id))'
)

async function run(statement, params) {
  return new Promise((resolve, reject) => {
    db.run(statement, params, err => {
      if (err) {
        reject(err)
      }
      resolve()
    })
  })
}

module.exports = { run }
