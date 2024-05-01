<?php

function card($cards){
  foreach($cards as $card){
    echo '
    <div class="cards img">
    <img src="'. $card["img"].'" alt="img-1">

    <div class="content">
    <h4>'. $card["title"].'</h4>
    <h3>'. $card["text"].'</h3>
    </div>

    <div class="data">
      <p>'. $card["date"].'</p>
    </div>

        
  </div>
    ';
    
  }
}