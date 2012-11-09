<!-- =========================== gritmyschool2012 =================================== -->

<h2>Help clear the snow in your neighbourhood this winter</h2>
<div class='ms-gritmyschool2012-banner' style="height:200px;"></div>
<div id="ms-explicit-party-list">
  <h3>Sign up to a pledge to clear snow from your school:</h3>
  <?  print pledge_get_ul_list_by_type('gritmyschool2012', 3, 3, "pledge_type_auto_width_column"); ?>
  <div style="width:100%;clear:both;height:1px"></div>
</div>
<div style="font-size:1.126em;padding-bottom:0.25em;">
  <p style="font-weight:bold;">
    Barnet Council will assist residents clearing snow by offering grit and spreading equipment
    to the first 40 schools to get 
    <?= microsites_get_pledge_type_details('gritmyschool2012', 'preloaded_data', 'target') ?>
    volunteers signed up.
    Residents must agree to become community Grit Keepers and get as many people to sign up to a pledge
    as possible. 
  </p>
  <p>
    Health and Safety advice is provided and insurance cover is arranged. 
  </p>
  <p> 
    Schools have the chance to take part and get parents and volunteers 
    to help clear access to the school. 
  </p>
  <p>
    If you would like to volunteer, you need to sign up to a pledge. If you can’t see your school, 
    then you need to start a new pledge.
  </p>
</div>
<div style="width:100%;clear:both;height:1px"></div>
<div style="float:right; width:45%;margin-left:1em;position:relative;" class="pb-barnet-breakout">
  <h3>
     What you need to do: Sign up to a pledge.
  </h3>
  <p>
    Check to see if your school is shown at the top of this page &mdash; click on it and sign up!
  <h3>
  Can’t see your school? Start a new pledge.
  </h3>
  <p>
  If there’s not already a pledge for your school, simply start one. 
  You will need to get a minimum of
  <?= microsites_get_pledge_type_details('gritmyschool2012', 'preloaded_data', 'target') ?>

  volunteers involved for the pledge to be successful.
  </p>

</form><!-- close existing global form :-( -->
<form class="basic_form xform" method="get"  action="https://www.barnet.gov.uk/forms/form/324/en/street_gritting_application" >
<p class="center">
  <input type="submit" class="button next" title="Begin application" name="next" value="Begin application »">
</p>
</form>
<form action="#"> <!-- open global form, no action -->

</div>
<ul style="font-size:1.126em;margin-bottom:2em;">
  <li>
      looking for your <strong>street</strong>? We're also running similar pledges for
      <a href="/type/gritmystreet2012">clearing snow from streets in Barnet</a>.
  </li>
</ul>
<ul>
    <li>
        Fill in the request form
    </li>
    <li>
      Barnet council will use this information to check the general practicalities, 
      grit supplies and set up a pledge. We will email you to notify this is successful 
      and send you a link to the pledge
    </li>
    <li>
      After that, it’s up to you to spread the word in your community and get people to sign the pledge.
    </li>
</ul>