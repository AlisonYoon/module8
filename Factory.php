<?php

# Factory pattern solves the problems Dependency Injection has.
// A Factory is generally an object which knows how to instantiate other objects for you.
// You tell Factory to "give me UserModel", and the Factory goes and gets all the dependencies UserModel needs and return it to you. (I don't have to pass anything in UserModel)
// Every time you create a class that has dependency, you create a Factory too.
// It achieves encapsulation. For me, I don't need to know what factory does as long as it does what it's supposed to do.
// Factory is not gonna follow the rule of Dependency Injection (it will instantiate objects inside) to help us get Dependency Injection.
// Factory should be something I can run. (ie. named function, or class)
// Different Frameworks have different opinions over Factory
