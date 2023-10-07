const express = require("express");
const app = express();
const { engine } = require("express-handlebars");
const path = require('path')
const ejs = require("ejs");


app.engine("html", require("ejs").renderFile);

app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "views"));
app.use(express.static(path.join(__dirname, "public")));



app.use('/',(req,res)=>{
    res.render("index.html");
})

app.listen(80, (req, res) => {
  console.log("server is listening on port 80");
});
