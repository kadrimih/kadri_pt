<?php
Use \Codeception\Util\Locator;

class Opus_searchCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testGoogleSearch(AcceptanceTester $I)
    {

        $I ->wantTo('');
        $I ->amOnPage ('/');
       # $I->wait(2);
        $I ->fillField('q', 'Opus Online');
        $I ->click('btnK');
        //kontrollime, kas näeme õiget pealkirja
        $I ->seeElement(Locator::contains('div[role="heading"] span','Opus Online'));
        //õiget veebilehte
        $I ->seeElement(Locator::contains(Locator::combine('a[href="https://opusonline.co/"]', 'a[role="button"]'), 'Website'));
        //õiget aadressi
        $I ->seeElement(Locator::contains('.LrzXr', 'Pärnu maantee 139c, 11317 Tallinn'));
        //õiget telefoninumbrit
        $I ->seeElement(Locator::contains(Locator::combine('.kno-fv', '.LrzXr', '.zdqRlf'),'682 9670'));





    }
}
