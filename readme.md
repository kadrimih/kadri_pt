## Üldine info ja vajaminevad programmid
Selle testi jooksutamiseks peaks olemas olema Selenium, Codeception ja WebDriver'id.
Täpse juhendi, kuidas Codeceptionis seadistada leiate[Codeceptioni ametlikult kodulehelt.](https://codeception.com/install)<br/>
Selenium'i saate alla laadida [siit.](https://www.seleniumhq.org/download/)
**NB:** Enne testi jooksutamist peaks Selenium'i käivitama.<br/>
Webdriverid on saadaval [samalt lehelt, kus ka Selenium.](https://www.seleniumhq.org/projects/webdriver/)<br/>
[Seleniumi jooksutamine koos WebDriveritega](https://codeception.com/docs/modules/WebDriver)
**NB:** Kui muidu on base url=/wd/hub, siis testi jooksutades Windows'i masinas, peaks selleks määrama "/".<br/>
Testi saab jooksutada [erinevaid käske kasutadese](https://codeception.com/docs/reference/Commands#Run). Et näha ka visuaalselt pilti võib lisada --html käsu lõppu. Ning html fail luuakse vendor/bin/tests/_output/report.html.<br/>
Erinevaid [Environmente lisades](https://codeception.com/docs/07-AdvancedUsage#Environments) saab jooksutada testi erinevated veebilehitsejates lisades käsu lõppu --env chrome --env firefox. <br/>

Näite acceptance.suite.yml - kõige lihtsam ülesehitud Chrome'is testi jooksutada:
```
actor: AcceptanceTester
class_name: WebGuy
modules:

    enabled:
      #  -PhpBrowser:
       #     url: 'http://www.google.com/'
        - WebDriver:
            url: 'http://www.google.com/'
            browser: 'chrome'
            port: 9515
```

Testi peaks lisama vendor/bin/tests/acceptance kausta.
                                 
