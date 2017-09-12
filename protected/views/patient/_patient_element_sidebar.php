


<aside class="column sidebar episodes-and-events" hidden="true">
    <div class="oe-scroll-wrapper" style="height:2000px">
        <div class="all-panels"></div>
    </div>

</aside>


<script type="text/javascript">
    new OpenEyes.UI.Sidebar(
      $('.sidebar .oe-scroll-wrapper')
    );
    $(document).ready(function() {
        event_sidebar = new OpenEyes.UI.PatientSidebar($('aside.episodes-and-events'), {
            patient_sidebar_json: '<?php echo $this->getElementTree() ?>',
            tree_id: 'patient-sidebar-elements'
            <?php if ($this->event->id) {?>,
            event_id: <?= $this->event->id ?>
            <?php } ?>
        });
    });
</script>

<style>
    .oe-event-sidebar-edit a.error {
        background-color: #bf4040;
        color: #fff;
    }
</style>






    <div class="nsb-sidebar-container" style=" z-type: 1100;
    position: fixed;
    width: 100%;">
      <ul class="nsb-sidebar-list">
        <li class="nsb-sidebar-element">
          <div class="main_view1">
            <div class="nsb-sidebar-block" id="nsb-history">
              HISTORY
              <div class="nsb-popup-history">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-history">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-opthalmic">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-systemic">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-medication">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-allergies">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-risks">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-social">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-family">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1">Blank</button>
                <button class="nsb-button show_view2">Added</button>
                <button class="nsb-button show_view3">Errors</button>
              </div>
            </div>
          </div>

          <div class="main_view2" hidden="true">
            <div class="nsb-sidebar-block" id="nsb-history">
              HISTORY
              <span class="nsb-added">History, Previous Systemic Diagnosis, Allergies, Risks</span>
              <div class="nsb-popup-history">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-history">
                        <div class="view1" hidden="">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-opthalmic">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-systemic">
                        <div class="view1" hidden="true">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                        <div class="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-medication">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-allergies">
                        <div class="view1" hidden="true">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                        <div class="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-risks">
                        <div class="view1" hidden="true">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                        <div class="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-social">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-family">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1">Blank</button>
                <button class="nsb-button show_view2">Added</button>
                <button class="nsb-button show_view3">Errors</button>
              </div>
            </div>
          </div>

          <div class="main_view3" hidden="true">
            <div class="nsb-sidebar-block" id="nsb-history">
              HISTORY
              <span class="nsb-added"><span class="nsb-red">History</span>, Previous Medication, <span class="nsb-red">Social History</span>, <span class="nsb-red">Family History</span></span>
              <div class="nsb-popup-history">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-history">
                        <div class="view1" hidden="true">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-opthalmic">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-systemic">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-medication">
                        <div class="view1" hidden="true">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                        <div class="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-allergies">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-img-risks">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-social">
                        <div class="view1" hidden="true">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                        <div class="view3">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Smoking Status cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block" id="nsb-popup-family">
                        <div class="view1" hidden="">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                        <div class="view3">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Please confirm there are no family history entries to be recorded
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1">Blank</button>
                <button class="nsb-button show_view2">Added</button>
                <button class="nsb-button show_view3">Errors</button>
              </div>
            </div>
          </div>

        </li>
        <li class="nsb-sidebar-element">
          <div class="main_viewn">
            <div class="nsb-sidebar-block" id="nsb-history">
              FUNCTION
              <div class="nsb-popup-history" id="nsb-function">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 1</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 2</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 3</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 4</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 5</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 6</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-1">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1" hidden="true">Blank</button>
                <button class="nsb-button show_view2" hidden="true">Added</button>
                <button class="nsb-button show_view3" hidden="true">Errors</button>
              </div>
            </div>
          </div>

        </li>
        <li class="nsb-sidebar-element">
          <div class="main_viewn">
            <div class="nsb-sidebar-block" id="nsb-history">
              REFRACTION
              <div class="nsb-popup-history" id="nsb-refraction">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 1</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 2</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 3</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 4</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 5</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 6</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-2">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1" hidden="true">Blank</button>
                <button class="nsb-button show_view2" hidden="true">Added</button>
                <button class="nsb-button show_view3" hidden="true">Errors</button>
              </div>
            </div>
          </div>

        </li>
        <li class="nsb-sidebar-element">
          <div class="main_viewn">
            <div class="nsb-sidebar-block" id="nsb-history">
              ANT SEG
              <div class="nsb-popup-history" id="nsb-antseg">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 1</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 2</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 3</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 4</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 5</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 6</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-3">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1" hidden="true">Blank</button>
                <button class="nsb-button show_view2" hidden="true">Added</button>
                <button class="nsb-button show_view3" hidden="true">Errors</button>
              </div>
            </div>
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="main_viewn">
            <div class="nsb-sidebar-block" id="nsb-history">
              FUNDUS
              <div class="nsb-popup-history" id="nsb-fundus">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 1</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 2</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 3</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 4</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 5</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 6</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-4">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1" hidden="true">Blank</button>
                <button class="nsb-button show_view2" hidden="true">Added</button>
                <button class="nsb-button show_view3" hidden="true">Errors</button>
              </div>
            </div>
          </div>
        </li>
        <li class="nsb-sidebar-element">
          <div class="main_viewn">
            <div class="nsb-sidebar-block" id="nsb-history">
              MANAGEMENT
              <div class="nsb-popup-history" id="nsb-management">
                <div class="nsb-popup-bar">
                  <span class="nsb-popup-swipe">Swipe Right to Close Navigator →</span>
                  <span class="nsb-popup-cross-icon"></span>
                </div>
                <span class="nsb-popup-title" hidden="true">History</span>
                <div class="nsb-popup-actions">
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 1</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Blured vision, Mild, Gradual onset, Both eyes, More than 6 months
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                        <div class="view3" hidden="true">
                          <div class="nsb-popup-error">
                            Goto Error >>
                          </div>
                          <div class="nsb-popup-snapshot">
                            Description cannot be blank
                          </div>
                          <span class="nsb-popup-block-title">History or Presenting Complaint</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 2</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Ophthalmic Surgery</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 3</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Systemic Diagnosis</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 4</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Previous Medication</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="nsb-popup-row">
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 5</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Allergies</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 6</span>
                        </div>
                        <div class="view2" hidden="view2">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Risks</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="true">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Social History</span>
                        </div>
                      </div>
                    </li>
                    <li class="nsb-popup-element">
                      <div class="nsb-popup-block nsb-popup-img-5">
                        <div class="view1">
                          <span class="nsb-popup-add-icon"></span>
                          <span class="nsb-popup-block-title">Element 7</span>
                        </div>
                        <div class="view2" hidden="">
                          <div class="nsb-popup-goto">
                            Goto >>
                          </div>
                          <div class="nsb-popup-snapshot">
                          </div>
                          <span class="nsb-popup-block-title">Family History</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="nsb-button show_view1" hidden="true">Blank</button>
                <button class="nsb-button show_view2" hidden="true">Added</button>
                <button class="nsb-button show_view3" hidden="true">Errors</button>
              </div>
            </div>
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
  font-size: 0.7rem;
  font-weight: 400;
  margin-left: 36px;
  color: #222222;
}
.nsb-popup-swipe {
  font-weight: normal;
  color: #ffaa0d;
  font-style: italic;
  text-align: center;
  width: 955px;
  display: inline-block;
  margin-left: 40px;
  vertical-align: top;
  margin-top: 5px;
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
  z-index: 3101;
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
  margin-left: 55px;
  position: fixed;
}
.nsb-popup-goto {
  color: #fff;
  display: block;
  height: 20px;
  width: 100px;
  margin-top: 65px;
  margin-left: 30px;
  position: fixed;
  border-radius: 10px;
  background-color: #0b68e4;
  font-size: 0.8rem;
  vertical-align: middle;
  text-align: center;
} /*view 3 red goto and red border around block and red font for snapshot of error(s)*/
.nsb-popup-error {
  color: #fff;
  display: block;
  height: 20px;
  width: 100px;
  margin-top: 65px;
  margin-left: 30px;
  position: fixed;
  border-radius: 10px;
  background-color: #cc0e27;
  font-size: 0.8rem;
  vertical-align: middle;
  text-align: center;
} /*view 3 red goto and red border around block and red font for snapshot of error(s)*/
.nsb-popup-snapshot {
  color: #fff;
  display: block;
  height: 50px;
  width: 136px;
  margin-top: 100px;
  margin-left: 10px;
  position: fixed;
  font-size: 0.7rem;
  vertical-align: bottom;
  text-align: left;
}
.nsb-popup-element { /*Try mouseenter event details to see if leave both*/
  float: left;
  margin-right: 112px;
}
.nsb-popup-element:last-child {
  margin-right: 0;
}
.nsb-popup-block-title {
  font-family: "Helvetica", Helvetica, Arial, sans-serif;
  color: #fff;
  font-size: 0.95rem;
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
  /*border: 3px solid black;*/
  font-weight: normal;
  width: 159px;
  height: 159px;
  background-repeat: no-repeat;
  background-size: 159px 159px;
  text-align: center;
  align-content: center;
  /*border-radius: 5px;*/
  display: inline-block;
  padding-top: 2px;
  box-shadow: 0 1px 1px 0 rgba(0,0,0,0.2), 0 2px 5px 0 rgba(0,0,0,0.24);
  transition: all .518s cubic-bezier(0.4,0.0,0.2,1);
  cursor: pointer;
}
.nsb-popup-block:hover {
  box-shadow: 0 1px 1px 0 rgba(0,0,0,0.25), 0 3px 6px 0 rgba(0,0,0,0.25);
  /*box-shadow: 0 1px 3px 0 rgba(0,0,0,0.10), 0 3px 12px 0 rgba(0,0,0,0.26);*/
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
    width: 179px;
    list-style: none;
    margin:0;
  }
  .nsb-sidebar-block {
    background-color: #0e386f;
    color: #fff;
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
    color: #0e386f;
    background-color: #fff;
    /*font-weight: bold;*/
  }
  #nsb-history:hover .nsb-popup-history {
    display: block;
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
    z-index: 1000;
    position: fixed;
    width: 100%;
    margin-top: 40px;
  }
  .nsb-popup-history {
    display: none;
    position: fixed;
    margin-left: 163px;
    margin-top: -49px;
    z-index: 3100;
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
  #nsb-function {
    margin-top: -129px;
  }
  #nsb-refraction {
    margin-top: -209px;
  }
  #nsb-antseg {
    margin-top: -289px;
  }
  #nsb-fundus {
    margin-top: -369px;
  }
  #nsb-management {
    margin-top: -449px;
  }
  .nsb-button:first-of-type {
    margin-left: 55px;
  }
  .nsb-button {
    width: 40px;
    height: 20px;
    border-radius: 5px;
    font-size: 10px;
    margin-left: 10px;
    margin-right: 0px;
    margin-top: 27px;
    padding: 0;
  }
  .nsb-button:focus {
    outline: none;
  }
  .nsb-added {
    position: fixed;
    display: block;
    font-size: 0.6rem;
    width: 160px;
    line-height: 1.3;
    margin-top: 5px;
    font-style: italic;
    font-weight: normal;
  }
  .nsb-red {
    color: #cc0e27;
  }
  .nsb-sidebar-container:hover {
    z-index: 1000;
  }
  .nsb-sidebar-container {
    z-index: 0;
  }




  .oe-event-sidebar-edit a.error {
    background-color: #bf4040;
    color: #fff;
  }
  </style>
  <script>
    $('.nsb-popup-cross-icon').click(function(){
      $('.nsb-popup-history').hide();
      setTimeout(function(){
        $('.nsb-popup-history').css('display','');
      },200);
    });

    $('.nsb-popup-block').click(function(){
      let $this = $(this);
      $('.nsb-popup-history').hide();
      setTimeout(function(){
        let title = $this.find('.nsb-popup-block-title:first').text();
        switch (title) {
          case 'History or Presenting Complaint':
            $('.has-icon:contains(Comorbidities):first').trigger('click');
            break;
          case 'Previous Ophthalmic Surgery':
            $('.has-icon:contains(Previous Ophthalmic Surgery):first').trigger('click');
            break;
          case 'Previous Systemic Diagnosis':
            $('.has-icon:contains(Systemic Diagnoses):first').trigger('click');
            break;
          case 'Previous Medication':
            $('.has-icon:contains(Medications):first').trigger('click');
            break;
          case 'Allergies':
            $('.has-icon:contains(Allergies):first').trigger('click');
            break;
          case 'Risks':
            $('.has-icon:contains(Risks):first').trigger('click');
            break;
          case 'Social History':
            $('.has-icon:contains(Social History):first').trigger('click');
            break;
          case 'Family History':
            $('.has-icon:contains(Family History):first').trigger('click');
            break;
          default :
            break;
        }
        if ($this.find('.view1:first').css('display') != 'none'){
          $this.find('.view1').hide();
          $this.find('.view2').show();
        //  alert('Element has been added');
        } else if($this.find('.view2:first').css('display') != 'none') {
        //  alert('Moved to element');
        } else {
        //  alert('Moved to error');
        }
        $('.nsb-popup-history').css('display','');},200);
    });

    $('.show_view1').click(function(){
      $('.main_view1').show();
      $('.main_view2').hide();
      $('.main_view3').hide();
    });
    $('.show_view2').click(function(){
      $('.main_view1').hide();
      $('.main_view2').show();
      $('.main_view3').hide();
    });
    $('.show_view3').click(function(){
      $('.main_view1').hide();
      $('.main_view2').hide();
      $('.main_view3').show();
    });

    $('.nsb-sidebar-block').mouseenter(function(event) {
      $('.ui-widget-overlay').css('height','30000px');
      $('.ui-widget-overlay').css('width','30000px');
      $('.ui-widget-overlay').css('z-index','600');

      $('.ui-widget-overlay').show();
    });
    $('.nsb-sidebar-block').mouseleave(function(event) {
      $('.ui-widget-overlay').hide();
    });
  </script>
