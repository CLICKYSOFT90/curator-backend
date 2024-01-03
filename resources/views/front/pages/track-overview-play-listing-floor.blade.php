@extends('front.layouts.master', ['headerClass' => 'header how-it-work-header'])

@section('title', 'Curator Club - Track Overview Play Listing Floor')

@section('content')
    <!-- TRACK OVERVIEW PLAYLISTING FLOOR SECTION BEGIN -->
    <section class="track-overview-playlisting-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="track-overview-tab">
                        <h4>My Track Overview</h4>
                        <div class="track-overview-box">
                            <a href="upload-song-playlisting-floor.html">Edit upload  <i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <img src="{{asset('assets/front/images/track-banner-img.png')}}" alt="iimage" class="img-fluid">
                            <div class="responses-inner-flex">
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/avatar-small-img.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <h6>Song title here</h6>
                                        <p>Jeff Jordan</p>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal1.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Release type</span>
                                        <p>Official release</p>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal2.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Trak link</span>
                                        <a href="javascript:void(0)">Spotify</a>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Release type</span>
                                        <p>Official release</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="song-lyrics-box">
                            <div class="songs-lyrics-text">
                                <h5>Song Lyrics <a href="upload-song-playlisting-floor.html" class="pull-right">Edit song upload info  <i class="fa fa-pencil" aria-hidden="true"></i></a></h5>
                                <p>English</p>
                                <a href="javascript:void(0)" class="songs-lyrics-box toggle-lyrics">
                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                    <svg version="1.1" class="svg-pencil-icon" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M495.914,189.604c-18.965-15.914-47.343-13.424-63.228,5.506l-42.695,50.523V99.129c0-12.279-5.106-24.17-14.008-32.625
                                      l-56.978-54.125C310.606,4.4,299.6,0.005,288.015,0.005H44.999C20.187,0.005,0,20.192,0,45.004v421.991
                                      c0,24.812,20.187,44.999,44.999,44.999h299.994c24.812,0,44.999-20.187,44.999-44.999v-81.961
                                      C391.835,382.851,501.116,253.407,501.46,253C517.447,233.948,514.969,205.592,495.914,189.604z M299.994,35.695
                                      c60.013,57.008,55.751,52.841,56.876,54.309h-56.876V35.695z M359.992,466.995c0,8.271-6.729,15-15,15H44.999
                                      c-8.271,0-15-6.729-15-15V45.004c0-8.271,6.729-15,15-15h224.995v74.998c0,8.284,6.716,15,15,15h74.998v161.129
                                      c-6.443,7.624-58.178,68.843-63.77,75.46c-4.467,5.324-7.682,11.711-9.296,18.47l-13.94,58.356
                                      c-1.319,5.526,0.596,11.324,4.948,14.976c4.356,3.656,10.399,4.529,15.607,2.272l55.05-23.862
                                      c4.133-1.792,7.988-4.226,11.401-7.151V466.995z M324.315,369.827l22.978,19.28l-5.11,6.052c-1.487,1.774-3.398,3.199-5.523,4.12
                                      l-27.524,11.931l6.971-29.178c0.538-2.253,1.609-4.382,3.064-6.116L324.315,369.827z M366.644,366.184l-22.967-19.271
                                      c2.33-2.757,77.698-91.943,82.91-98.11l22.919,19.231L366.644,366.184z M478.509,233.682l-9.649,11.43l-22.908-19.222
                                      l9.682-11.457c5.289-6.303,14.71-7.125,20.997-1.849C483.043,217.963,483.75,227.436,478.509,233.682z"/>
                                    </g>
                                </g>
                                        <g>
                                            <g>
                                                <path d="M224.995,90.003H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
                                      S233.279,90.003,224.995,90.003z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M314.993,181.001H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
                                      S323.277,181.001,314.993,181.001z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M314.993,271H74.998c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
                                      C329.993,277.715,323.277,271,314.993,271z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M224.995,360.998H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
                                      S233.279,360.998,224.995,360.998z"/>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                              </svg>
                                </a>
                            </div>
                            <div class="songs-lyrics-text-doc">
                                <div class="lock-box-text">
                                    <div class="songs-lyrics-text song-lyrics-new">
                                        <ul>
                                            <li>Ain't this what they've been waitin' for?</li>
                                            <li>You ready? Uh, uh</li>
                                            <li>I used to pray for times like this, to rhyme like this</li>
                                            <li>So I had to grind like that to shine like this</li>
                                            <li>In a matter of time I spent on some locked-up shit</li>
                                            <li>In the back of the paddy wagon, cuffs locked on wrists</li>
                                            <li>Seen my dreams unfold, nightmares come true</li>
                                            <li>It was time to marry the game and I said, "Yeah, I do."</li>
                                            <li>If you want it, you gotta see it with a clear-eyed view</li>
                                            <li>Got a shorty, she tryna bless me like I said achoo</li>
                                            <li>Like a nigga sneezed, nigga please, 'fore them triggers squeeze</li>
                                            <li>I'm gettin' cream, never let them hoes get in between</li>
                                            <li>Of what we started, lil' nigga but I'm lion-hearted</li>
                                            <li>They love me when I was stuck and they hated when I departed</li>
                                            <li>I go and get it regardless, draw it like I'm a artist</li>
                                            <li>No crawlin', went straight to walkin', with foreigns in my garages</li>
                                            <li>All foreign bitches ménagin', fuckin', suckin' and swallowin'</li>
                                            <li>Anything for a dollar, they tell me get 'em, I got 'em</li>
                                            <li>I did it without a album</li>
                                            <li>I did shit with Mariah</li>
                                            <li>Lil' nigga, I'm on fire</li>
                                            <li>Icy as a hockey rink, Philly nigga, I'm flyer</li>
                                            <li>When I bought the Rolls-Royce they thought it was leased</li>
                                            <li>Then I bought that new Ferrari, hater, rest in peace</li>
                                            <li>Hater, rest in peace, rest in peace to the parking lot</li>
                                            <li>Phantom so big, can't even fit in the parking spot</li>
                                            <li>You ain't talkin' 'bout my niggas, then what you talkin' 'bout?</li>
                                            <li>Gangstas move in silence, nigga, and I don't talk a lot</li>
                                            <li>I don't say a word, I don't say a word</li>
                                            <li>Was on my grind and now I got what I deserve, fuck nigga</li>
                                            <li>Hold up, wait a minute, y'all thought I was finished?</li>
                                            <li>When I bought that Aston Martin, y'all thought it was rented?</li>
                                            <li>Flexin' on these niggas, I'm like Popeye on his spinach</li>
                                            <li>Double M, yeah, that's my team, Rozay the captain, I'm lieutenant</li>
                                            <li>I'm the type to count a million cash then grind like I'm broke</li>
                                            <li>That Lambo my new bitch, she don't ride like my Ghost</li>
                                            <li>I'm ridin' around my city with my hand strapped on my toast</li>
                                            <li>'Cause these niggas want me dead and I gotta make it back home</li>
                                            <li>'Cause my mama need that bill money, my son need some milk</li>
                                            <li>These niggas tryna take my life, they fuck around, get killed</li>
                                            <li>You fuck around, you fuck around, you fuck around, get smoked</li>
                                            <li>'Cause these Philly niggas I brought with me don't fuck around, no joke, no</li>
                                            <li>All I know is murder, when it come to me</li>
                                            <li>I got young niggas that's rollin', I got niggas throwin' B's</li>
                                            <li>I done did the DOA's, I done did the KOD's</li>
                                            <li>Every time I'm in that bitch, I get to throwin' 30 G's</li>
                                            <li>But now I'm hangin' out that drop head, I'm ridin' down on Collins</li>
                                            <li>They let my nigga Ern back home, that young nigga be wildin'</li>
                                            <li>We young niggas, we mobbin', like Batman and we're robbin'</li>
                                            <li>This two-door Maybach with my seat all reclinin'</li>
                                            <li>I'm like, "Real nigga, what up? Real nigga, what up?"</li>
                                            <li>If you ain't about that murder game, then pussy nigga, shut up</li>
                                            <li>If you diss me in your raps I'll get yo' pussy-ass stuck up</li>
                                            <li>When you touchdown in my hood, no that tour life ain't good</li>
                                            <li>Catch me down in MIA at that Heat game on wood</li>
                                            <li>With that Puma life on my feet like that little engine I could</li>
                                            <li>Boy, I slide down on your block, bike on 12 o'clock</li>
                                            <li>And they be throwin' deuces on the same nigga they watch</li>
                                            <li>And I'm the king of my city 'cause I'm still callin' them shots</li>
                                            <li>And these lames talkin' that bullshit the same niggas that flopped</li>
                                            <li>I'm the same nigga from Berks Street with them nappy braids, that lock</li>
                                            <li>The same nigga that came up and I had to wait for my spot</li>
                                            <li>And these niggas hatin' on me, hoes waitin' on me</li>
                                            <li>Still on that hood shit, my Rolls-Royce on E</li>
                                            <li>They gon' remember me, I say remember me</li>
                                            <li>So much money, have yo' friends turn in yo' enemies</li>
                                            <li>And when there's beef I turn my enemies to memories</li>
                                            <li>With them bricks they go for 40, ain't no 10 a key</li>
                                            <li>Hold up, broke nigga turned rich, love the game like Mitch</li>
                                            <li>And if I leave, you think them pretty hoes gon' still suck my dick?</li>
                                            <li>It was somethin' about that Rollie when it first touched my wrist</li>
                                            <li>Had me feelin' like that dope boy when he first touched that brick</li>
                                            <li>I'm gone</li>
                                            <li>Woo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="songs-lyrics-text">
                                <h5>Explicit Content</h5>
                                <p>No</p>
                            </div>
                            <div class="songs-lyrics-text">
                                <h5>Genres</h5>
                                <ul>
                                    <li>Rap (Eminem)</li>
                                    <li>Trap (Travis Scott)</li>
                                    <li>Sad Rap/ Emo Rap (Lil Peep)</li>
                                    <li>Gang Rap (Lil Durk)</li>
                                </ul>
                            </div>
                            <div class="songs-lyrics-text">
                                <h5>Pitch for Curator.</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            </div>
                        </div>
                    </div>
                    <div class="track-overview-tab track-playlisting">
                        <div class="track-overview-box">
                            <a href="upload-song-playlisting-floor.html">Edit upload  <i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <img src="{{asset('assets/front/images/track-overview-img2.png')}}" alt="iimage" class="img-fluid">
                            <div class="responses-inner-flex">
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/avatar-small-img.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <h6>Song title here</h6>
                                        <p>Jeff Jordan</p>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal1.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Release type</span>
                                        <p>Official release</p>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal2.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Trak link</span>
                                        <a href="javascript:void(0)">Spotify</a>
                                    </div>
                                </div>
                                <div class="responses-avatr-flex">
                                    <div class="response-avatar-img">
                                        <img src="{{asset('assets/front/images/cal3.png')}}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="responses-avatar-content">
                                        <span>Release type</span>
                                        <p>Official release</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="song-lyrics-box">
                            <div class="songs-lyrics-text">
                                <h5>Song Lyrics <a href="upload-song-playlisting-floor.html" class="pull-right">Edit song upload info  <i class="fa fa-pencil" aria-hidden="true"></i></a></h5>
                                <p>English</p>
                                <a href="javascript:void(0)" class="songs-lyrics-box2 toggle-lyrics2">
                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                    <svg version="1.1" class="svg-pencil-icon" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M495.914,189.604c-18.965-15.914-47.343-13.424-63.228,5.506l-42.695,50.523V99.129c0-12.279-5.106-24.17-14.008-32.625
                                      l-56.978-54.125C310.606,4.4,299.6,0.005,288.015,0.005H44.999C20.187,0.005,0,20.192,0,45.004v421.991
                                      c0,24.812,20.187,44.999,44.999,44.999h299.994c24.812,0,44.999-20.187,44.999-44.999v-81.961
                                      C391.835,382.851,501.116,253.407,501.46,253C517.447,233.948,514.969,205.592,495.914,189.604z M299.994,35.695
                                      c60.013,57.008,55.751,52.841,56.876,54.309h-56.876V35.695z M359.992,466.995c0,8.271-6.729,15-15,15H44.999
                                      c-8.271,0-15-6.729-15-15V45.004c0-8.271,6.729-15,15-15h224.995v74.998c0,8.284,6.716,15,15,15h74.998v161.129
                                      c-6.443,7.624-58.178,68.843-63.77,75.46c-4.467,5.324-7.682,11.711-9.296,18.47l-13.94,58.356
                                      c-1.319,5.526,0.596,11.324,4.948,14.976c4.356,3.656,10.399,4.529,15.607,2.272l55.05-23.862
                                      c4.133-1.792,7.988-4.226,11.401-7.151V466.995z M324.315,369.827l22.978,19.28l-5.11,6.052c-1.487,1.774-3.398,3.199-5.523,4.12
                                      l-27.524,11.931l6.971-29.178c0.538-2.253,1.609-4.382,3.064-6.116L324.315,369.827z M366.644,366.184l-22.967-19.271
                                      c2.33-2.757,77.698-91.943,82.91-98.11l22.919,19.231L366.644,366.184z M478.509,233.682l-9.649,11.43l-22.908-19.222
                                      l9.682-11.457c5.289-6.303,14.71-7.125,20.997-1.849C483.043,217.963,483.75,227.436,478.509,233.682z"/>
                                    </g>
                                </g>
                                        <g>
                                            <g>
                                                <path d="M224.995,90.003H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
                                      S233.279,90.003,224.995,90.003z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M314.993,181.001H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
                                      S323.277,181.001,314.993,181.001z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M314.993,271H74.998c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
                                      C329.993,277.715,323.277,271,314.993,271z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M224.995,360.998H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
                                      S233.279,360.998,224.995,360.998z"/>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                              </svg>
                                </a>
                            </div>
                            <div class="songs-lyrics-text-doc2">
                                <div class="lock-box-text">
                                    <div class="songs-lyrics-text song-lyrics-new">
                                        <ul>
                                            <li>Ain't this what they've been waitin' for?</li>
                                            <li>You ready? Uh, uh</li>
                                            <li>I used to pray for times like this, to rhyme like this</li>
                                            <li>So I had to grind like that to shine like this</li>
                                            <li>In a matter of time I spent on some locked-up shit</li>
                                            <li>In the back of the paddy wagon, cuffs locked on wrists</li>
                                            <li>Seen my dreams unfold, nightmares come true</li>
                                            <li>It was time to marry the game and I said, "Yeah, I do."</li>
                                            <li>If you want it, you gotta see it with a clear-eyed view</li>
                                            <li>Got a shorty, she tryna bless me like I said achoo</li>
                                            <li>Like a nigga sneezed, nigga please, 'fore them triggers squeeze</li>
                                            <li>I'm gettin' cream, never let them hoes get in between</li>
                                            <li>Of what we started, lil' nigga but I'm lion-hearted</li>
                                            <li>They love me when I was stuck and they hated when I departed</li>
                                            <li>I go and get it regardless, draw it like I'm a artist</li>
                                            <li>No crawlin', went straight to walkin', with foreigns in my garages</li>
                                            <li>All foreign bitches ménagin', fuckin', suckin' and swallowin'</li>
                                            <li>Anything for a dollar, they tell me get 'em, I got 'em</li>
                                            <li>I did it without a album</li>
                                            <li>I did shit with Mariah</li>
                                            <li>Lil' nigga, I'm on fire</li>
                                            <li>Icy as a hockey rink, Philly nigga, I'm flyer</li>
                                            <li>When I bought the Rolls-Royce they thought it was leased</li>
                                            <li>Then I bought that new Ferrari, hater, rest in peace</li>
                                            <li>Hater, rest in peace, rest in peace to the parking lot</li>
                                            <li>Phantom so big, can't even fit in the parking spot</li>
                                            <li>You ain't talkin' 'bout my niggas, then what you talkin' 'bout?</li>
                                            <li>Gangstas move in silence, nigga, and I don't talk a lot</li>
                                            <li>I don't say a word, I don't say a word</li>
                                            <li>Was on my grind and now I got what I deserve, fuck nigga</li>
                                            <li>Hold up, wait a minute, y'all thought I was finished?</li>
                                            <li>When I bought that Aston Martin, y'all thought it was rented?</li>
                                            <li>Flexin' on these niggas, I'm like Popeye on his spinach</li>
                                            <li>Double M, yeah, that's my team, Rozay the captain, I'm lieutenant</li>
                                            <li>I'm the type to count a million cash then grind like I'm broke</li>
                                            <li>That Lambo my new bitch, she don't ride like my Ghost</li>
                                            <li>I'm ridin' around my city with my hand strapped on my toast</li>
                                            <li>'Cause these niggas want me dead and I gotta make it back home</li>
                                            <li>'Cause my mama need that bill money, my son need some milk</li>
                                            <li>These niggas tryna take my life, they fuck around, get killed</li>
                                            <li>You fuck around, you fuck around, you fuck around, get smoked</li>
                                            <li>'Cause these Philly niggas I brought with me don't fuck around, no joke, no</li>
                                            <li>All I know is murder, when it come to me</li>
                                            <li>I got young niggas that's rollin', I got niggas throwin' B's</li>
                                            <li>I done did the DOA's, I done did the KOD's</li>
                                            <li>Every time I'm in that bitch, I get to throwin' 30 G's</li>
                                            <li>But now I'm hangin' out that drop head, I'm ridin' down on Collins</li>
                                            <li>They let my nigga Ern back home, that young nigga be wildin'</li>
                                            <li>We young niggas, we mobbin', like Batman and we're robbin'</li>
                                            <li>This two-door Maybach with my seat all reclinin'</li>
                                            <li>I'm like, "Real nigga, what up? Real nigga, what up?"</li>
                                            <li>If you ain't about that murder game, then pussy nigga, shut up</li>
                                            <li>If you diss me in your raps I'll get yo' pussy-ass stuck up</li>
                                            <li>When you touchdown in my hood, no that tour life ain't good</li>
                                            <li>Catch me down in MIA at that Heat game on wood</li>
                                            <li>With that Puma life on my feet like that little engine I could</li>
                                            <li>Boy, I slide down on your block, bike on 12 o'clock</li>
                                            <li>And they be throwin' deuces on the same nigga they watch</li>
                                            <li>And I'm the king of my city 'cause I'm still callin' them shots</li>
                                            <li>And these lames talkin' that bullshit the same niggas that flopped</li>
                                            <li>I'm the same nigga from Berks Street with them nappy braids, that lock</li>
                                            <li>The same nigga that came up and I had to wait for my spot</li>
                                            <li>And these niggas hatin' on me, hoes waitin' on me</li>
                                            <li>Still on that hood shit, my Rolls-Royce on E</li>
                                            <li>They gon' remember me, I say remember me</li>
                                            <li>So much money, have yo' friends turn in yo' enemies</li>
                                            <li>And when there's beef I turn my enemies to memories</li>
                                            <li>With them bricks they go for 40, ain't no 10 a key</li>
                                            <li>Hold up, broke nigga turned rich, love the game like Mitch</li>
                                            <li>And if I leave, you think them pretty hoes gon' still suck my dick?</li>
                                            <li>It was somethin' about that Rollie when it first touched my wrist</li>
                                            <li>Had me feelin' like that dope boy when he first touched that brick</li>
                                            <li>I'm gone</li>
                                            <li>Woo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="songs-lyrics-text">
                                <h5>Explicit Content</h5>
                                <p>No</p>
                            </div>
                            <div class="songs-lyrics-text">
                                <h5>Genres</h5>
                                <ul>
                                    <li>Rap (Eminem)</li>
                                    <li>Trap (Travis Scott)</li>
                                    <li>Sad Rap/ Emo Rap (Lil Peep)</li>
                                    <li>Gang Rap (Lil Durk)</li>
                                </ul>
                            </div>
                            <div class="songs-lyrics-text">
                                <h5>Pitch for Curator.</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            </div>
                        </div>
                    </div>
                    <div class="song-lyrics-btn">
                        <a href="upload-song-playlisting-floor.html" class="btn btn-primary songs-lyrics-back"><img src="{{asset('assets/front/images/upload-back-img.png')}}" alt="image" class="img-fluid"> BACK</a>
                        <a href="{{route('user.successfully.submitted')}}" class="btn btn-primary song-lyrics-finish">Finish my submission </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TRACK OVERVIEW PLAYLISTING FLOOR SECTION END -->
@endsection

@push('front-scripts')
    <script>
        // LYRICS TEXTBOX SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.querySelector(".toggle-lyrics");
            const lyricsText = document.querySelector(".songs-lyrics-text-doc");
            toggleButton.addEventListener("click", function (e) {
                e.preventDefault();
                if (lyricsText.style.display === "none" || lyricsText.style.display === "") {
                    lyricsText.style.display = "block";
                } else {
                    lyricsText.style.display = "none";
                }
            });
        });
        // LYRICS TEXTBOX SHOW & HIDE SCRIPT END
        // LYRICS TEXTBOX2 SHOW & HIDE SCRIPT BEGIN
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.querySelector(".toggle-lyrics2");
            const lyricsText = document.querySelector(".songs-lyrics-text-doc2");
            toggleButton.addEventListener("click", function (e) {
                e.preventDefault();
                if (lyricsText.style.display === "none" || lyricsText.style.display === "") {
                    lyricsText.style.display = "block";
                } else {
                    lyricsText.style.display = "none";
                }
            });
        });
        // LYRICS TEXTBOX2 SHOW & HIDE SCRIPT END
    </script>
@endpush