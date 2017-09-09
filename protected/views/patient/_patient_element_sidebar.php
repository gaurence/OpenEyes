<aside class="column sidebar episodes-and-events">
  <div class="oe-scroll-wrapper" style="height:2000px">
    <div class="all-panels"></div>
    <div class="nsb-sidebar-container">
      <ul class="nsb-sidebar-list">
        <li class="nsb-sidebar-element">
          <div class="nsb-sidebar-block" id="nsb-history">
            HISTORY
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="nsb-sidebar-block">
            FUNCTION
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="nsb-sidebar-block">
            REFRACTION
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="nsb-sidebar-block">
            ANT SEGMENT
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="nsb-sidebar-block">
            FUNDUS
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="nsb-sidebar-block">
            MANAGEMENT
          </div>
        </li>
      </ul>
    </div>


  </div>

</aside>
<div class="nsb-popup-history">
  <div class="nsb-popup-bar">
    <span class="nsb-popup-swipe">Swipe Right to Close Navigator</span>
    <span class="nsb-popup-cross-icon"></span>
  </div>
  <span class="nsb-popup-title">History</span>
  <div class="nsb-popup-actions">
  <ul class="nsb-popup-row">
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-img-history">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">History or Presenting Complaint</span>
      </div>
    </li>
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-img-dia">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
      </div>
    </li>
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-img-systemic">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
      </div>
    </li>
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-img-medication">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Previous Medication</span>
      </div>
    </li>
  </ul>
  <ul class="nsb-popup-row">
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-history-img">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Allergies</span>
      </div>
    </li>
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-img-risks">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Risks</span>
      </div>
    </li>
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-history-img">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Social History</span>
      </div>
    </li>
    <li class="nsb-popup-element">
      <div class="nsb-popup-block" id="nsb-popup-history-img">
        <span class="nsb-popup-add-icon"></span>
        <span class="nsb-popup-block-title">Family History</span>
      </div>
    </li>
  </ul>
</div>
</div>

<style>
.nsb-popup-bar {
  display: inline-block;
}
.nsb-popup-title {
  font-size: 1.2rem;
  font-weight: 400;
  margin-left: 36px;
  color: #222222;
}
.nsb-popup-swipe {
  color: #ffaa0d;
  font-style: italic;
  text-align: center;
  width: 955px;
  display: inline-block;
  margin-left: 40px;
  vertical-align: top;
  margin-top: 10px;
}
.nsb-popup-actions {
  margin-left: 36px;
  margin-top: 4px;
}
.nsb-popup-cross-icon {
  background-size: 34px 34px;
  display: inline-block;
  height: 34px;
  width: 34px;
  z-index: 1101;
  margin:0;
  padding: 0;
  cursor: pointer;
}
.nsb-popup-add-icon {
  background-size: 50px 50px;
  display: block;
  height: 50px;
  width: 50px;
  margin-top: 55px;
  margin-left: 86px;
  position: fixed;
}
.nsb-popup-element { /*Try mouseenter event details to see if leave both*/
  float: left;
  margin-right: 29px;
}
.nsb-popup-element:last-child {
  margin-right: 0;
}
.nsb-popup-block-title {
  font-family: "Helvetica", Helvetica, Arial, sans-serif;
  color: #fff;
  font-size: 1.1rem;
}
.nsb-popup-row {
  list-style: none;
  margin: 0;
  padding: 0;
  display: inline-block;
  margin-bottom: 60px;
}
.nsb-popup-row:last-child {
  margin-bottom: 0;
}
.nsb-popup-block {
  width: 222px;
  height: 159px;
  background-repeat: no-repeat;
  background-size: 245px 175px;
  text-align: center;
  align-content: center;
  border-radius: 5px;
  display: inline-block;
  padding-top: 2px;
  box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,.12), 0 2px 4px rgba(0,0,0,.24);
  cursor: pointer;
}
.nsb-popup-block:hover {
  opacity: 0.8;
}
#nsb-popup-history-img {
  background-image:
    linear-gradient(
      to top,
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.4)
    ),
    url(https://corticalchauvinism.files.wordpress.com/2015/02/doctor-taking-medication-history-ashx.jpg);
}
.nsb-sidebar-list {
  list-style: none;
  margin:0;
}
.nsb-sidebar-block {
  background-color: #777b7e;
  color: #dcdcdc;
  padding-top: 32px;
  padding-left: 16px;
  font-size: 1.0rem;
  line-height: 1.0rem;
  border-top: #9a9a9a 1px solid;
  height: 80px;
  font-family: "Helvetica", Helvetica, Arial, sans-serif;
  background-repeat: no-repeat;
  background-position: 97% 50%;
}
.nsb-sidebar-block:hover {
  color: #fff;
}
.nsb-sidebar-header {
  color: #0e386f;
  font-size: 1.5rem;
  font-style: italic;
  margin: 0;
  font-weight: 300;
  line-height: 40px;
}
.nsb-sidebar-container {
  margin-top: 40px;
}
#nsb-popup-history{
  display: none;
  position: fixed;
  margin-left: 180px;
  margin-top: 40px;
  z-index: 1100;
  background-color: green;
  width: 1045px; /* use .nsb-popup-* syntax or something*/
  height: 480px;
  font-family: "Helvetica", Helvetica, Arial, sans-serif;
  background-color: #fff;
  font-size: .8rem;
  box-shadow: 2px 2px 2px 2px #666666;
  border-radius: 7px;
  font-family: Helvetica, Arial, sans-serif;
  border: 1px solid #aaaaaa;
  /*color: #222222;*/
  box-sizing: border-box;
  line-height: .8rem;
  padding-left: 0;
  padding-top: 5px;
}




.oe-event-sidebar-edit a.error {
  background-color: #bf4040;
  color: #fff;
}
</style>
<script>
  $('#nsb-history').mouseenter(function(event) {
    console.log('entered');
    $('.nsb-popup-history').show();
    //prevent hiding for
    $('#nsb-history').on('hover',function(e){
      console.log('nsb-history');
      e.stopPropagation();
    });
    $('#nsb-popup-history').on('hover',function(e){
      console.log('nsb-popup-history');
      e.stopPropagation();
    });
    //hide
    $(window).on('hover',function(){
      console.log('body');
      $('#nsb-history').off('hover');
      $('.nsb-popup-history').off('hover');
      $('.nsb-popup-history').hide();
      $(window).off('hover');
    });
  });
</script>
