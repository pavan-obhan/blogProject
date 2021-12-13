<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
        Post::factory(10)->create();

//        $user = User::factory()->create();
//
//        $world_news = Category::create([
//            'name' => 'World News',
//            'slug' => 'world-news'
//        ]);
//
//        $national_news = Category::create([
//            'name' => 'National News',
//            'slug' => 'national-news'
//        ]);
//
//        $tech_news = Category::create([
//            'name' => 'Tech news',
//            'slug' => 'tech-news'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $tech_news->id,
//            'title' => "Apple announces Self Service Repair",
//            'slug' => "apple-right-to-repair",
//            'excerpt' => "CUPERTINO, CALIFORNIA Apple today announced Self Service Repair, which will allow customers.....",
//            'body' => "<p>CUPERTINO, CALIFORNIA Apple today announced Self Service Repair, which will allow customers who are comfortable with completing their own repairs access to Apple genuine parts and tools. Available first for the iPhone 12 and iPhone 13 lineups, and soon to be followed by Mac computers featuring M1 chips, Self Service Repair will be available early next year in the US and expand to additional countries throughout 2022. Customers join more than 5,000 Apple Authorized Service Providers (AASPs) and 2,800 Independent Repair Providers who have access to these parts, tools, and manuals.The initial phase of the program will focus on the most commonly serviced modules, such as the iPhone display, battery, and camera. The ability for additional repairs will be available later next year.<p>"
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $tech_news->id,
//            'title' => "Apple News expands local news offerings",
//            'slug' => "apple-news-expands",
//            'excerpt' => "Apple News will now offer its local news experience in three additional cities in the US: Charlotte, Miami, and Washington, D.C. Each experience is curated by Apple News...",
//            'body' => "<p>Apple News will now offer its local news experience in three additional cities in the US: Charlotte, Miami, and Washington, D.C. Each experience is curated by Apple News editors and features coverage of topics that are important to local communities, from restaurant openings and real estate trends to big policy decisions. Local news offerings in Apple News provide readers with access to top publications, including Axios Charlotte, the Charlotte Observer, Eater Miami, the Miami Herald, DCist, Washingtonian, the Washington Post, and more.At Apple News, we know that access to trusted local news is critical for communities, and an important resource for a national audience as well, said Lauren Kern, editor-in-chief of Apple News. We are committed to working with local publishers across the country to support their journalism and offer our users local coverage in the cities and regions they care about.</p>"
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $world_news->id,
//            'title' => "Covid: Austria back in lockdown despite protests",
//            'slug' => "austria-back-in-lockdown",
//            'excerpt' => "Austria has returned to a full national lockdown as protests against new restrictions aimed at curbing Covid-19 infections spread across Europe....",
//            'body' => "<p>Austria has returned to a full national lockdown as protests against new restrictions aimed at curbing Covid-19 infections spread across Europe.From midnight, Austrians have been asked to work from home and non-essential shops have closed.New restrictions have sparked protests throughout Europe. People clashed with police in the Netherlands and Belgium.Infection rates have risen sharply on the continent, prompting warnings from the World Health Organization (WHO).On Saturday WHO regional director Dr Hans Kluge told the BBC that unless measures were tightened across Europe - such as on vaccines, wearing masks and with Covid passes for venues - half a million more deaths could be recorded by next spring.Last week Austria became the first European country to make Covid vaccination a legal requirement, with the law due to take effect in February. Politicians in neighbouring Germany are debating similar measures as intensive care units there fill up and case numbers hit fresh records..<p>"
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $national_news->id,
//            'title' => "Why India's Salesmen Are Protesting Against JioMart: 'We Face Ruin'",
//            'slug' => "protest-against-jiomart",
//            'excerpt' => "In Maharashtra home to Vita - and Tamil Nadu, traditional salesmen have organised blockades of some JioMart delivery vehicles...",
//            'body' => "<p>Sangli: For eight straight days  household goods salesman Vipresh Shah has failed to sell a single pack of Dettol soap to the storekeepers who have been buying from him ever since he took over his family business as a teenager  14 years ago.Mr Shah is an official distributor for Britain's Reckitt Benckiser in Vita  near Sangli city  around 200 miles south of Mumbai. But he said once-loyal customers now point to an app - JioMart Partner - on their smartphones showing prices up to 15% lower  instead of placing orders.'As Reckitt's distributor  I used to be like a prince in the market ' said Mr Shah. 'Now the buyer tells me  'See how much you've been ripping us off!''The 31-year-old said he lost $2 000 of his own money as he discounted products to match prices on JioMart  the app rolled out by Reliance Industries billionaire Mukesh Ambani in his drive to revolutionise retail distribution in India.<p>"
//        ]);

    }
}
