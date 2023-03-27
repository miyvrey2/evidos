# Evidos SignHost client library
As provided on the [evidos github](https://github.com/Evidos/signhost-phpdemoclient) is a library to make PHP calls to their signing system. To enhance the functionality I created this package to create easier calls.

## Install
1. Add repository to you project composer.json
```{
"repositories": [
    {
        "url": "https://github.com/miyvrey2/Evidos.git",
        "type": "git"
    }
]
```
2. install the package
`composer require miyvrey2/evidos`

## Setup in Evidos
1. register application key
   - https://portal.signhost.com/ApplicationKey
   - fill in 'App description'
   - EVIDOS_APP_KEY = [AppName] + " " [AppSecret];
2. User tokens
   - https://portal.signhost.com/Settings (helemaal onderaan)
   - fill in 'description' and press 'add'
   - You see [Usertoken] (contains a dot after 10 chars)
   - EVIDOS_API_KEY = [Usertoken]
3. register postback (to receive updates from Evidos)
   - https://portal.signhost.com/RegisteredPostbacks
   - whitelist this URL in app/Http/Middleware/VerifyCsrfToken.php