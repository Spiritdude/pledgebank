<!-- =========================== jubilee park party =================================== -->

<h1>Arrange a Diamond Jubilee party in the park</h1> 
<div class='ms-diamondparkparty-banner' style="height:200px;"></div>
<div id="ms-explicit-party-list">
  <h3>Our Diamond Jubilee party in the park pledges:</h3>
  <?  print pledge_get_ul_list_by_type('diamondparkparty', 3, 3, "pledge_type_auto_width_column"); ?>
  <div style="width:100%;clear:both;height:1px"></div>
</div>
<div style="ms-general-box">
  <p>
    Not only are we supporting <a href="/type/diamondjubilee">Diamond Jubilee street parties</a>,
    but we can also help you arrange a party in a <b>Barnet park</b>.
  </p>
  <ul>
	<li>
		Your Diamond Jubilee party in the park
		should be on or close to the Jubilee weekend which is 2&ndash;5 June 2012.
    </li>
  </ul>
  <div class="pb-barnet-breakout" style="position:relative;padding-top: 1em;">
    <p class="corner-label">
      Please note:
    </p>
    <h4>
      Sharing your contact details with other volunteers
    </h4>
    <p>
      If you agree to become a volunteer, we will automatically share your contact details with other participants.
    </p>
  </div>
  <p>
    The council will provide advice and insurance cover.
  </p>
</div>
<div style="width:100%;clear:both;height:1px"></div>
<div style="float:right; width:45%;margin-left:1em;position:relative;" class="pb-barnet-breakout">
  <h3>
    What you need to do: Sign up to a pledge!
  </h3>
  <p>
    Check to see if the park you'd like to use is shown at the top of this page &mdash; click on it and sign up!
  </p>
  <h3>
    Can&rsquo;t see the park? Start a new pledge! 
  </h3>
  <p>
    If there&rsquo;s not already a pledge for the park, simply start one by 
    filling in the application form.
    You will need to get a minimum of 
    <?= microsites_get_pledge_type_details('diamondparkparty', 'preloaded_data', 'target') ?>
    households involved for the pledge to be successful.
  </p>
	<p>
		The final day to submit your application is <strong>Sunday 20&nbsp;May</strong>. If your application is approved, a pledge will be created 
		and <strong>must be signed by three or more households by 5pm, Friday 25 May</strong>.
	</p>
  </form><!-- close existing global form :-( -->
  <form class="basic_form xform" method="get"  action="http://www.barnet.gov.uk/forms/form/246/en/party_in_the_park_application" >
  <p class="center">
    <input type="submit" class="button next" title="Begin application" name="next" value="Begin application »">
  </p>
  </form>
  <form action="#"> <!-- open global form, no action -->
</div>
<p>The PledgeBank team will . . .</p>
<ul>
  <li>
    start a pledge page to help encourage people to get involved and invite you to be the first to sign it
  </li>
  <li>
    or, if we&rsquo;ve created one already, we'll let you know so you can sign up to it
  </li>
</ul>
<p>
  After that, it&rsquo;s up to you to spread the word to your friends and neighbours to get them to sign your pledge and get involved!
</p>
