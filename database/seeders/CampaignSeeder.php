<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\CampaignDetail;
use App\Models\CampaignSubmittedUser;
use App\Models\CuratorCampaign;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    public function run()
    {
        $userId = 1;
        $curatorId = 3;
        $modelPath = 'App\Models\CuratorCampaign';
        $lyrics_1 = <<<EOT
[Intro: Calm]
Yo
Aye SA, let's get it
Aanh, नalle

[Verse 1: Calm]
Itna roliye ab gaane sunke rona bhi ni aata (Fuck)
Chup hona bhi ni aata
Aisi zindagi mili jisse me khone bhi ni chahta
Thodi kati thi bheje ki to wo sona bhi ni chahta
Meri ghadi thi assi ki maine socha bhi ni zyada leli pehni to pata chala ki waqt hi ne bigaada
Mujhe paise se pehle se chidd hai uss hi ne ujaada ghar aur tabhi to chhaapu me tere papa se bhi zyada
Ye mare jaaye sheesh (Sheesh)
Doom 3 (Doom)
Hain nok nukeeli Trishool ki (Aanh)
Jis din me beth jaata likhne
Bas ussi din aati hai neend sukoon ki (Sab chutiye hain)
Par Deti kala ni dhoka
National tv pe launde dikhenge jalake jota
Main tab busy tha thoda ni bola kisi ko maine
Par laundе pelne ko ready thе aata bahar ab ni lauda wo keedo chup raho
Kabse ghiss raha hu
Inhe pata ni tha rap kya hai tabse likh raha hu
Peeche mude poora club jab me club me ghusta hu
Jo kare nafrat mere lund pe baj jao
Aye SA let's get it (Let's get it)
Ma I made it
Khaate daal bhaat saath me laal maas aur
Saath aath rapper (Skkrrt)
Whack ass rapper
Nalle papa k paise pe koode nakaam rapper
Main aur Sa jaaye lekar ek ak to bata mujhe kaha kaha hain rapper ye part time hi rapper hain
Pa pa ye rapper the pataal me khelu me
Sattaal me feku agatha ki novel ye khaata ni kisi ka kisi ka kisi ka feel like a G
Boss dawg ladke baat kar tameez se
Invoice lakho ki 2019 se
Badi baatein vada pav khaate launde feeke (Ohh)

[Bridge: Encore ABJ]
Dedh hafte pehle bhai sold-out show maarke aaya thak-thaka ke launda
Keh raha, "Bhai, do hafte chill maarenge"
Kal raat [?], keh raha, "Bhai kuchh lag raha hai, andar se nikaalna hai bhai kuchh, ye-ye karte hain"
Addict ladke bhai

[Verse 2: Encore ABJ]
(Sunn) Seedhe maut ke bina kya jeewan
SM matter kare sangeen
Poora rap game taken liam neeson (Chee bhai cringe)
Main kabhi kabhi haste hue maardu chaanta
Chaunk matt pehle hi kaha
Rap game hai tekken jin kazama (What the fuck)
Kabhi kabhi bakchodi me beaton ki hoti hatya
Sasya! Buss kya?!
Jana tujhe door par tu thaak gaya
Darr gaya
Ghar ja
Jaa ni paya ghar kyuki
Bhool gaya ghar kya
Banara hai majboor si shakal kya
Hatero ne sali moond li akal kya
Kare scene seedhe maut ki nakal
Aaj tootegi gend (Haan)
La mere flow ka de hafta
Main karra vasooli
Tu girwi rakhe apna pen
Dekh agar hota mai zada kameena (Na, na) to keheta tujhe girvi rakh apni mem
Jaane de gande iraado khayalo se reheta door sher rehene ki koshish hai kar raha saaf dil par uska ganda hain den
De maara 2 ghante ka set
Bangalore me ye 3 gane kare back 2 back -1 pe aur fefde check
Thook denge khoon aur moot denge, bet!
Ye hai poori poori disrespect aur ego check
Flow, bars, ya fir live shows, take your pick
Tera saare boxes pe karte chalte tick
Thaam mera lund aur ispe maatha tek
Main aur SA leke chale AK
Dekhe, sapere, sapole, savere, andhere
Bhatere, bhayanak
To aa mat, khuja matt yaha jaha hum khaate hai lode waha paka mat
Gar calm bole “le aa” to mai lauu kayamat
Gar calm bole “kha ja” to ni koi salamat
Bar for bar aake naaple taaqat
Leta ni koi saans saala bin ijaazat
EOT;
        $lyrics_2 = <<<EOT
Life Is A Mess Mein Ulzaano Mein, Gira So Much Stressed I see Trust Nahi Chahta Loyalty I Got Respect Bade Cheques To Do List Ko Check Mark Karu Mein
Karu Checkmate Tere Raaje Saare Fir Wafa Karu Apne Waade Saare Fir Likhun Mein Ekk Nayi Album Aur Fir Yaha Bethe Baatein Kare Saare
The Only Rest I Have Is Rest In Peace Ye Bottlein Mujhe Boht Kuch Bolti Mein Inko Khulu Band Karu Poori Raat Aur Ye Mere Aage Acha Acha Banda Kholti
Kuch Bottlein To Maine Todd Di Kuch Bottlein To Maine Chhod Di Kuch Bottlon Ne Mujhe Nahi Chorra Kuch Bottlon Mein Maine Ye Jawani Roll Di
Khata Ke Puttle Khud Bata Kaha Tu Khudse Karke Shikwe Ban Raha Hain Abb Khuda Tu Khudka Khuda Ke Bande Ekk Kadam Bhi Nahi Uthega Tera Tujhse Uski Marzi Yaa Madad Ke Binn
Sabar Ke Binn To Zindagi Hain Intshaar Sabar Ke Binn To Sabhi Hue Gunahgar Sabar Ke Binn To Waqt Ka Wajudh Hi Nahi Sabar Ke Binn To Kamyabi Naa Mumkin
Sabar To Chhav Hain Warna Zindagi To Dhoop Hi Rahi Sabar To Hosh Hain Warna To Bass Gunudgi Rahi Shit Is Simple As A B C Agar Jokhay Nahi To Mein Bhi Nahi
Mujhe Yaar Chala Rahe Mujhe Saath Chala Rahe Mera Haath Bata Rahe Meri Baat Bani Rahe Ekk Bisaat Bani Rahe Ekk Auqaat Bani Rahe Fukke Jaan Wo Kala Mein Hum To Laashein Likh Rahe
Aaj Bhi Wahi Jokhay Wahi Mein Aaj Bhi Wahi Jokhay Wahi Mein Came A Long Way, Always Had Alone Way Samajhte Nahi Hain Aaj Kal Ke Launde
Aaj Bhi Wahi Jokhay Wahi Mein Aaj Bhi Wahi Jokhay Wahi Mein Came A Long Way, Always Had Alone Way Samajhte Nahi Hain Aaj Kal Ke Launde
Ye Kala Mera Pet Bhi Bharegi Ye Kala Mera Pet Bhar Rahi Hain Iss Waqt Ka Bhi Bada Intezaar Kiya Sochta Tha Kala Der Kar Rahi Hain
Baat Sirf Alfaaz Ki Nahi Khwaahishein Haalat Ki Bhit Chadd Rahi Hain Mein Apna Likha Baatne Bhi Nikla Kisiko Ko Shharrf Kisi Ko Bheek Lag Rahi Hain
Sochta Tha Kya Ye Mumkin Bhi Hain Ke Ekk Hakikat-e-Khwaab Se Kahi jyada Hasin Ho Sochta Tha Koyi To Yaar Ho Mera Jo Mere Har Raaz Ka Sabse Wafadar Amin Ho
Par Mile Mujhe Dhoke Boht Samjhata Rehta Jokhay Boht Mein Hasta Hu Abb Roke Boht Hain Khoye Maine Mauke Boht
Kuch Aadatein Hain Shaunk Hain Boht Fans Ko Security Roke Boht Par Bhai Khula Ghume Shehar Mein 109 Milne Ke Milenge Mauke Boht
Smoke Kill, I Got Chest Pains Aankein Laal Chupaye DAG Ke Chasme Mera Kalam Nahi Raha Mere Bas Mein Mere Baste Mein Pistal Hain Bachke
At More Then 92 Keep Your Run You Win Me Keep Your Run You Win Me Do Or Die For The Dogs And The Dudes Yeahh !!
At More Then 92 Keep Your Run You Win Me Jokhay Aur Mein Saach Tum Kafan Mein Lipte Pade Lago Safed Jhooth
Aaj Bhi Wahi Jokhay Wahi Mein Aaj Bhi Wahi Jokhay Wahi Mein Came A Long Way, Always Had Alone Way Samajhte Nahi Hain Aaj Kal Ke Launde
Aaj Bhi Wahi Jokhay Wahi Mein Aaj Bhi Wahi Jokhay Wahi Mein Came A Long Way, Always Had Alone Way Samajhte Nahi Hain Aaj Kal Ke Launde
EOT;
        $lyrics_3 = <<<EOT
Verse 1 : JANI 12 missed calls 30 mere text It's been a week already where you at? Tera bhr gaya hai dill ya tjhe millgaya hai koi Esa sochta houn kabhi kabhi mein Now you fly out states chorhe scene pey Sheher e dill k sb hadse haseen the Ab tu mile agr khuwab me bhi mujhe Toh Dua hai k me uthoun hi na nend se Mjhper toutke be asr youn ilaaj na likhwaya kar Ankhein pdhleta jazbaat na chupaya kar Koi baat na numaya kar Likhdeta houn sb kuch mjhe raaz na bataya ker Sheeshe k dill me yun pathar k alfaaz gadhte hein Majboor hein kiyaa btaein k hum Tumpey marte hein Teri farmaish Chand hum sitaroun ki koshishein krte hein Kyun sunke ansuna bta esa Kiya gunnah krte hein
Chorus : JANI Mein Jo dhundun ghr Jane ka koi bahana Tum barish le ana Yeah yeah Mein Jo mangu tmse falsoun ka herjana Tum waqt leana Ya tum hi aana
Verse 2 : JANI Kesi khudgharz, esi kefiyat krdi Mjhe teherne na de Tere zaalim sheher ki sardi Teri adaa se Leke woh lehja sb hi Kuch farzi Kiya aram ae koi Dua aser hi nahi krti Now you going back n forth Tera phone switch off You smells like weed baby khiche Teri aur K ab tu ni Meri kol I could cry with no reasons Kuch nahi bol Baatein toh kehni hein kaafi per kese pehle mjhe krni na ae Parakhta houn mein bhi insnao ko jaana wafa Kitne chehere dikhae Qadar tjhe phr nahi hoti Sharam tmhe tab nahi ati Khali hein dill k woh Kone Aj unme udaasi jama ki Bheege akele hein ab bhi Kyun ser per ghumo ki ghata thi Khali hein dill k woh Kone Aj unme udaasi jama ki
		Chorus : JANI
Mein Jo dhundun ghr Jane ka koi bahana
Tum barish le ana
Yeah yeah
Mein Jo mangu tmse falsoun ka herjana
Tum waqt leana
Ya tum hi aana
EOT;
        $lyrics_4 = <<<EOT
[Intro]
Straight Up
Damn
Oooooooh..ooooh
Ah

[Verse]
Bas yaadein thi likh di iss kagaz pe
Album toh bola tum logon ne
10 gaane jode
Aur album ka naam deke sabko suna daale
Parva ni ab tum log kya bole (Yeah)
Ye duniya ke aankhon mein hum thode change hai
Mere pe sabhi ke blame hai
Apna toh kagaz ka plane hai
Hoto ko sil varna jail hai
Damnn !!
Astro - Meri khilaaf thi meri awaaz
Astra- Shuru se,thi mere dil ka pehla malaal
Ye Album
Chali nahi palat ke dekha toh sab bole once more
Shuru se rakhe hai kam dost
Aur bole ye - "mein on a drug dose"
Papa ko
Papa ko pasand nahi aata tha
School ke paper mein gaane likh aata tha
Ab mere school ki teacher bhi fan hai
Teacher ki beti ka banda bhi fan hai
Mere se copy karre mera style
Mujhko ni farak,mein kar raha hu smile
Gaano mein chahiye nahi paise se hype
Jinko mein pasand hu ho jayega bhai
Ye kaisa loop (Woah)
Kitne takleef hai,kitne sawaal hai
Ye tere gaano mein kaun tere saath hai?
Bandi jo bagal mein, kya tera pyaar hai ?
Peeche jo khadi hai ,kya teri car hai ?
Album ke gaano mein kyo itna vakt hai?
Bella tu cocky hai, kyuki mein mard hai
Lafzon mein jaan hai, kaagaz mein dard hai (Hey)
Manzile shant hai,ye mera karz hai
Bhara barood,inn haathon ki nabz mein
Khole jab toote vo khwaabon ke baste
Kaise hum duniya ke dal-dal mein dhaste (Woah)
Damnn!!
Puche mujhe sabne ki kya hai tere album ka concept
Kuch log isse maante hai nonsense
Kuch log isse maante hai success
Kuch bheed mein bas phekte hai bottlay
Kuch dekh, mujhe lete hai hausley
TBH mujhe fark hi nahi padta hai
Kya hoga mujhe darr hi nahi lagta hai
Bella, itna negative kyon hai??
Mere gaane sunn sarr kyo pakadta hai
Mera wala sound sab laana chahte hai
Shit! Koi apni dil ki nahi sunta hai
Maara teer laga BULL'S EYE
Bana BELLA abhi PUSHPA hai
Scene mere jaisa aur dhund raha hai
Kyunki OG yaha khule aam ghum raha hai
Abhi hit mera ek gaana nahi
Abhi hit mera harr gaana hai
Bhai studio mein ghuste hai baad mein
Bole pehle mujhe ghar jaana hai (Ghar)
Abhi papa mere daant rahe hai
Bole gaana vaana chhod raha hu
Ye hustle mere bas ki baat nahi
Bole ghar pe maa-baap ka lauta hu mein (Ya)
Akele baith rota hu mein
Kyu duniya ko hasne ke mauke du
Ye mitti mein sona hu mein
Kyo duniya ko khud ko mein paane du
Kis kisko javaab du mein
Iss duniya mein
Hai logo ke sar pe
Har vakt paisa
Shohrat ki baatein
Bas hum hi doobe
Baaki kinaare pe
Kamzor hu mein shayari mein
Par hai junoon meri gayaki mein
Hai sab pasand jo aaye sadgi mein
Phulo se pyaar hu mausami mein
Tha fukra mein baarvi mein
Jab ghumta tha Maruti mein
GMT se Chaand Cinema
Notebook mein leke meri takleefein
Ab inhe meri success dikhe jaise Highway
DM mein bole- "mujhe tere liye asaan hai"
Delhi teri jagah hai aur Bombay mein makaan hai
Bina mujhe puche ye aise kaise chaape
Mujhe hi nahi pata mere naam ke kya fayde
Toh phir mere jaise yaha tik kaise paayega
Mujhe nahi chahiye kisi se bhi collab
Bella pehle khud hi ke naam se kamayega
Fir sabhi homie log saath mein khilayega
Dekh tere hate ko mein paisa banayega
Dekh meri soch se mein kaha tak jaayega
Dekh mere music ko future banayega
[Outro]
Damn (Damn)
Ooooooooh...Oooooooh

Damn
Ooooooooh...Oooooooh

Yeah Yeah Yeah
HOME
EOT;
        $lyrics_6 = <<<EOT
[Chorus]
I got room in my fumes (Yeah)




She fill my mind up with ideas




I'm the highest in the room (It’s lit)
Hope I make it outta here (Let's go)





[Verse 1]
She saw my eyes, she know I'm gone (Ah)




I see some things that you might fear




I’m doin' a show, I'll be back soon (Soon)
That ain't what she wanna hear (Nah)




Now I got her in my room (Ah)
Legs wrapped around my beard
Got the fastest car, it zoom (Skrrt)




Hope we make it outta here (Ah)




When I'm with you, I feel alive
You say you love me, don't you lie (Yeah)
Won't cross my heart, don't wanna die




Keep the pistol on my side (Yeah)

[Chorus]
Case it’s fumes (Smoke)




She fill my mind up with ideas (Straight up)




I’m the highest in the room (It's lit)
Hope I make it outta here (Let’s go, yeah)

[Verse 2]
We ain't stressin' 'bout the loot (Yeah)




My block made of quesería




This not the molly, this the boot
Ain’t no comin' back from here
Live the life of La Familia
It's so much gang that I can't see ya (Yeah)




Turn it up 'til they can't hear (We can't)
Runnin', runnin' 'round for the thrill
Yeah, dawg, dawg, 'round my real (Gang)
Raw, raw, I been pourin' to the real (Drank)




Nah, nah, nah, they not back of the VIP (In the VIP)
Gorgeous, baby, keep me hard as steel
Ah, this my life, I did not choose




Uh, been on this since we was kids
We gon' stay on top and break the rules
Uh, I fill my mind up with ideas





[Chorus]
Case it's fumes




She fill my mind up with ideas (Straight up)




I'm the highest in the room (I'm the highest, it's lit)
Hope I make it outta here
EOT;

        $dataSet = [
            [
                'user_id' => $userId,
                'submission_type' => Campaign::CURATOR,
                'curator_campaigns' => [
                    'user_id' => $userId,
                    'campaign_id' => 1,
                    'link' => 'https://open.spotify.com/track/1MGGL4HhGkixTKXpNj43Zb?si=41001f5140144b74',
                    'audio' => '620891702920352.mp3',
                    'cover_image' => '846511701182466.jpg',
                    'is_released' => 1,
                    'release_date' => '2022-10-26',
                    'artist_name' => 'Seedhe Mout',
                    'track_title' => 'Freestyle',
                    'release_type' => 'Official Release',
                    'has_lyrics' => 1,
                    'lyrics' => $lyrics_1,
                    'is_explicit' => 1,
                    'share_youtube' => 1
                ],
                'campaign_submitted_data' => [
                    'campaign_id' => 1,
                    'user_id' => $curatorId,
                    'submission_type' => Campaign::CURATOR
                ]
            ],
            [
                'user_id' => $userId,
                'submission_type' => Campaign::CURATOR,
                'curator_campaigns' => [
                    'user_id' => $userId,
                    'campaign_id' => 2,
                    'link' => 'https://open.spotify.com/track/2tb3BSK1Z9s5n7YynbuAbp?si=988214b798f44b0e',
                    'audio' => '623381703015593.mp3',
                    'cover_image' => '846511701182477.jpg',
                    'is_released' => 1,
                    'release_date' => '2023-11-10',
                    'artist_name' => 'TA',
                    'feature_artist' => 'Jhokay',
                    'track_title' => 'Jhokay Aur Mai 2',
                    'release_type' => 'Official Release',
                    'has_lyrics' => 1,
                    'lyrics' => $lyrics_2,
                    'share_youtube' => 1
                ],
                'campaign_submitted_data' => [
                    'campaign_id' => 2,
                    'user_id' => $curatorId,
                    'submission_type' => Campaign::CURATOR
                ]
            ],
            [
                'user_id' => $userId,
                'submission_type' => Campaign::CURATOR,
                'curator_campaigns' => [
                    'user_id' => $userId,
                    'campaign_id' => 3,
                    'link' => 'https://open.spotify.com/track/2mrO05VnrPkQg4PTixL91Y?si=e92fae5420544748',
                    'audio' => '629101702920640.mp3',
                    'cover_image' => '846511701182212.webp',
                    'is_released' => 1,
                    'release_date' => '2023-12-02',
                    'artist_name' => 'Jani',
                    'track_title' => 'Tum Hi Ana',
                    'release_type' => 'Official Release',
                    'has_lyrics' => 1,
                    'lyrics' => $lyrics_3,
                    'share_youtube' => 1
                ],
                'campaign_submitted_data' => [
                    'campaign_id' => 3,
                    'user_id' => $curatorId,
                    'submission_type' => Campaign::CURATOR
                ]
            ],
            [
                'user_id' => $userId,
                'submission_type' => Campaign::CURATOR,
                'curator_campaigns' => [
                    'user_id' => $userId,
                    'campaign_id' => 4,
                    'link' => 'https://open.spotify.com/track/0urglsHb4ng4HELZZhYEJ4?si=d5f7a56e4dc84371',
                    'audio' => '694561702927329.mp3',
                    'cover_image' => '633311703015809.png',
                    'is_released' => 1,
                    'release_date' => '2022-10-20',
                    'artist_name' => 'Bella',
                    'track_title' => 'Antidote',
                    'release_type' => 'Official Release',
                    'has_lyrics' => 1,
                    'lyrics' => $lyrics_4,
                    'share_youtube' => 1
                ],
                'campaign_submitted_data' => [
                    'campaign_id' => 4,
                    'user_id' => $curatorId,
                    'submission_type' => Campaign::CURATOR
                ]
            ],
            [
                'user_id' => $userId,
                'submission_type' => Campaign::CURATOR,
                'curator_campaigns' => [
                    'user_id' => $userId,
                    'campaign_id' => 5,
                    'link' => 'https://open.spotify.com/track/0urglsHb4ng4HELZZhYEJ4?si=7b1a6da20d1c4a23',
                    'audio' => '819651702925998.mp3',
                    'cover_image' => '8465117011824332.jpg',
                    'is_released' => 1,
                    'release_date' => '2023-10-20',
                    'artist_name' => 'Bella',
                    'track_title' => 'Wonder Boy',
                    'release_type' => 'Official Release',
                    'share_youtube' => 1
                ],
                'campaign_submitted_data' => [
                    'campaign_id' => 5,
                    'user_id' => $curatorId,
                    'submission_type' => Campaign::CURATOR
                ]
            ],
            [
                'user_id' => $userId,
                'submission_type' => Campaign::CURATOR,
                'curator_campaigns' => [
                    'user_id' => $userId,
                    'campaign_id' => 6,
                    'link' => 'https://open.spotify.com/track/3eekarcy7kvN4yt5ZFzltW?si=3b52c8349daa43cf',
                    'audio' => '879581701182466.mp3',
                    'cover_image' => '681341703015593.png',
                    'is_released' => 1,
                    'release_date' => '2022-06-11',
                    'artist_name' => 'Travis Scott',
                    'track_title' => 'HIGHEST IN THE ROOM',
                    'release_type' => 'Official Release',
                    'has_lyrics' => 1,
                    'lyrics' => $lyrics_6,
                    'is_explicit' => 1,
                    'share_youtube' => 1
                ],
                'campaign_submitted_data' => [
                    'campaign_id' => 6,
                    'user_id' => $curatorId,
                    'submission_type' => Campaign::CURATOR
                ]
            ]

        ];

        foreach ($dataSet as $val){
            Campaign::create([
                'user_id' => $val['user_id'],
                'submission_type' => $val['submission_type']
            ]);
            CuratorCampaign::create($val['curator_campaigns']);
            CampaignSubmittedUser::create($val['campaign_submitted_data']);
        }
    }
}