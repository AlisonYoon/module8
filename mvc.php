<?php

# MVC : a way of designing application architecture
//M : a data layer (but it's not your database') that stores data and retrieves
//V : the output of the application (it's NOT what "user sees". it's not HTML or CSS, it's more like JSON result from API response)
//C : it's a glue. the thing that talks to the model and the view.
//By splitting these three, one can be swapped easily(modularity). Also each individual part is reusable. (makes it DRY). separation of concern.
//Downside : it's designed for large scale application. not for single web page(it's an overkill) or smaller application.
// (it's gonna take longer, but in the long run, it's better and code is reusable).

//there could be more than MVC depends on what your app is like. if you're doing user-validation, where should it belong to? (Model or Controller?)
//these topics are arguable. (Generally, there are two approaches -> either do everything in the controller or do everything in the Model)
//Pure MVC means - authentication(and everything) is done in controller.

#ADR - action domain responder (it's another architecture)
//Action is controller
//Domain is model
//Responder is view

//authentication/validation are done in domain (it's the opposite of general practice of MVC where these are done in controller)

//business logic- specification of how your app works. How database, authentication or validation work.

#Domain - where your business belongs to (your business field). This is where you put business logic.

