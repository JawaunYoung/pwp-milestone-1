//import libraries
const express = require("express")
const morgan = require("morgan")

//initiate Express
const app = express()

//app.use allows for different middleware to be brought into Express
//Morgan: a logger for express so that we have a record for debugging
// app.use(morgan(format:"dev"))
app.use(express.json())

const indexRoute = express.Router()

const handleRequest1 = (req,res, next) => {
    req.body = {"status":200,data:null,messages:"express hurts my head"}
    console.log("Request",req)
    next()
}


function Request2(request, response, nextFunction) {
    console.log("request in handler 2", request)
    return response.json(request.body)
}

indexRoute.route("/data").get(handleRequest1, handleRequest2)

app.use("/apis", indexRoute)

// app.listen(4200, hostname: ()=> {console.log("express successfully built")})