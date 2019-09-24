<?php

# DIC : Dependency Injection Container
// Factory got problems - it could create many same instances in different places
// Factory tree - one factory could use many other factories and they could also use many other factories
// DIC is designed to fix this problem.
// One centralized repository of all the results of all the factories. - This way, you know that there is only one result of each factory exists.
// You don't add factories in the DIC, you just "run" the factories in DIC.
// Now every part of your application uses DIC
