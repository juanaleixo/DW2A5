<?php
require 'header.php'
?>

<div class="accordion w-100" id="basicAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#basicAccordionCollapseOne" aria-expanded="false" aria-controls="collapseOne">
        Pergunta 1
      </button>
    </h2>
    <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
      data-mdb-parent="#basicAccordion">
      <div class="accordion-body">
    
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Pergunta 2
      </button>
    </h2>
    <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-mdb-parent="#basicAccordion">
      <div class="accordion-body">
        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree">
        Pergunta 3
      </button>
    </h2>
    <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
      data-mdb-parent="#basicAccordion">
      <div class="accordion-body">
       
      </div>
    </div>
  </div>
</div>

<?php
require 'footer.php'
?>