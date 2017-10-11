<?php
/**
 * Template Name: About Page
 *
 * Template for an about page.
 *
 * @package Harris Media Base Theme
 */
get_header(); ?>

<style>
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
p {
    font-family:'Raleway';
    font-size: 11pt;
}
h2 {
    font-family:'Raleway';
}
ol {
    font-family:'Raleway';
}
#about-image {
    display: block;
    margin: auto;
}
@media (max-width: 767px){
#about-image {
    max-width: none;
    display: block;
    margin: 0 -37.885%;
    width: 167.777%;
    }
}


div#about-row {
    margin-left: 15px;
    margin-right: 15px;
    padding: 20px;
}
#about-row h1 {
    font-family:'Raleway', 400;
    font-weight: bolder;
    color: #1d315a;
    text-align: center;
    letter-spacing: 4px;
    text-transform: uppercase;
}
#about-row h4 {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    padding-left: 150px;
    padding-right: 150px;
    line-height: 130%;
}
div#image-row {
    margin-left: 75px;
    margin-right: 75px;
    margin-bottom: 50px;
}
div#challenge-row {
    background: #f3f3f3;
    padding-top: 40px;
    padding-bottom: 40px;
    /* padding-left: 225px;
    padding-right: 225px; */
}
div#response-row {
    padding-top: 40px;
    padding-bottom: 40px;
    /* padding-left: 225px;
    padding-right: 225px; */
}
@media (max-width: 767px){
    #about-row h4 {
    text-align: center;
    font-family: Georgia;
    font-style: italic;
    padding-left: 0px;
    padding-right: 0px;
    line-height: 130%;
}
    div#image-row {
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 50px;
}
    /* div#challenge-row {
    padding-left: 40px;
    padding-right: 40px;
} */
    /* div#response-row {
    padding-left: 40px;
    padding-right: 40px;
} */
}
</style>

<div id="about-row" class="row">
<h1> About The American Project </h1> <?php the_field('source') ?>
<!-- <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim. </h4> -->
    <h4><?php the_field('header_description') ?></h4>
</div>

<div id="image-row" class="row">
    <img id="about-image" src="http://americastaging.wpengine.com/wp-content/uploads/2017/10/About_cover-photo.png" alt="School of Public Policy">
</div>

<div id="challenge-row" class="row">
    <div class="col-xs-1">
    </div>
    <div class="col-xs-10">
        <h2>Challenge:</h2>
        <br>

        <p>In a provocative essay for the New Criterion titled, “American Conservatism and the Problem of Populism,” conservative historian George Nash sees this moment in American politics as being profoundly different from anything he’s witnessed in the last half century. Noting early in his piece that “Perhaps the most important fact to assimilate about modern American conservatism is that it is not, and has never been, monolithic. It is a coalition – a coalition built on ideas – with many points of origin and diverse tendencies that are not always easy to reconcile,” Nash goes on to outline the different philosophical factions, which combined over decades to create an enduring political movement.</p>

        <p>Importantly, in describing the interplay between conservative intellectuals and politicians, Nash makes an essential point: before there were coalitions, there were “ideas.” Whether it was the Neo-Cons or the libertarian economists, or the moral traditionalists, each one of these groups had their own intellectual defenders, grassroots political supporters, and media outlets.</p>

        <br>
        <p>Until now.</p>
        <br>

        <p>Towards the end of his essay, Nash concludes, “In short, Trumpist populism is defiantly challenging the fundamental tenets and perspectives of every component of the post-1945 conservative coalition described in this essay.” From this dire conclusion, Nash asks, “But conservatives, more than ever, need minds as well as voices, arguments as well as sound bites, and civility as well as indignation. In this season of discontent, it might be useful for conservatives of all persuasions to step back from the fray for a moment and ask themselves a simple question: What do conservatives want? What should they want? Perhaps by getting back, very deliberately to basics, conservative intellectuals can begin to restore some clarity and direction to the debate.”</p>

        <p>The transformation of American politics will start with new ideas leading to new coalitions solving tomorrow’s challenges. Part of America’s political re-balancing will start with the renewal of conservatism. What we are proposing here, then, is creating that space for the nation’s leading conservative intellectuals (scholars and pundits) to “step back from the fray for a moment” to consider in smaller group deliberations the future of American conservatism and its political expression through the lenses of major policy issues, which have been both sent reeling and disconnected from political expression by the Donald Trump candidacy and this populist era.</p>

        <p>This is more than an intellectual exercise, but a high stakes initiative – responding to the possible loss of meaningfully engaging on the defining ideals and values of the American Project. Any hopes for finding a national political balance in the wake of this year’s presidential election, must be founded on a renewal of the conservative intellectual tradition capable of addressing both the issues of the moment and speaking to the timeless ideals of The American Project.</p>
    </div>
    <div class="col-xs-1">
    </div>
</div>


<div id="response-row" class="row">
    <div class="col-xs-1">
    </div>
    <div class="col-xs-10">
        <h2>Response:</h2>
        <br>
        <p>To be based at the <a class="body-link" href="https://publicpolicy.pepperdine.edu">Pepperdine School of Public Policy</a> (with office and meeting space in Malibu, CA, and Washington, DC), we are proud to announce the launch of the “The American Project on the Future of Conservatism” – a two-year effort, which could be grown into an “Institute” with ongoing presence and influence. Year one will be comprised of two phases followed by a single event in year two.</p>
        <br>
        <p>The focus of this initiative will be on content creation - presenting a set of essays responding to an initial set of questions before the conservative movement:</p>
        <br>
        <ol>
            <li> How did we get here? A discussion on the history of conservative thought including past efforts at coalition-building with evaluation of its political impact – positive and negative.</li>
            <li>How do we understand principles of citizen formation, federalism and civil society in light of ObamaCare and increased federal regulations?</li>
            <li>How do we understand America’s role in the world in an age of terrorism?</li>
            <li>How do we understand religious liberty post-Obergefell?</li>
        </ol>
        <br>
        <p>Essays will be sponsored through the Project, and while composed individually, they will be discussed within respective working groups of 4-5 participants at a weekend colloquium here in Malibu planned for May/June. The goal will be to have these essays published either in groups or individually in leading outlets.</p>
        <br>
        <p>Participants will be invited to the Project based on their past work on these questions with a desire to inviting varying perspectives within the conservative movement. Given our priority on promoting the Project’s content, we seek not only scholars, but editors, activists and media to engage in the work of the Project.</p>
    </div>
    <div class="col-xs-1">
    </div>
</div>


<?php get_footer(); ?>