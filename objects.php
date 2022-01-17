<?php 
  class Activities{
    public $activity = array('Surfing','Day Spa','Diving','Snorkeling',
     'Island Tours','Cable Ski','Mountain Bike Trails','Bar',
     'Fishing','Yoga','Shooting','Spear Fishing','Pool','Hiking Trails',
     'Quiz Nights','Fly Boarding','Cooking Lessons','Food and wine Pairing',
     'Swimming Dolphins','Horse Back Riding','Sunset Cruises','Sailing',
     'Kayaking','Miniature Golf','Bingo Evenings','Buffet','Concierge Services',
     'Outdoor Massage','24 Hour Room Service','StarGazing',
     'Wedding Venue','Hair Salon','Gym Facilities','Live Music',
     'Swimming with Sharks','Karaoke',
     '4x4 Tracks','Dune Buggy Hire','Happy Hour',
     'Floating Picnic Experience','Treasure Hunt','Hot Tub',
     'Beer Tasting','Chocolate Making Course','Museum','Light House','Night Club',
     'Out door Day Parties','sky Diving','Helicopter tours','Para Sailing','wind Surfing','Kite Boarding',
     'Petting Zoo','Car Rental','Hunting','Bird Watching','Reptile Shows'
    );  

   //method
    public function randomActivity(){
      echo $this->activity[array_rand($this->activity)];
      // echo array_unique(array_rand($this->activity));
      // echo $this->activity[shuffle($this->activity)];
   }
  //  public function getRandom(){
  //   echo $this->activity[$this->randomActivity()];
  //  }
}

// $activity = ['Surfing','Day Spa','WIFI','Diving','Snorkeling',
//      'Island Tours','Cable Ski','Mountain Bike Trails','Bar',
//      'Fishing','Yoga','Shooting','Spear Fishing','Pool','Hiking Trails',
//      'Quiz Nights'];

// function getRandomArray(){
//   var_dump(shuffle($activity));

//   $activity = ['Surfing','Day Spa','WIFI','Diving','Snorkeling',
//   'Island Tours','Cable Ski','Mountain Bike Trails','Bar',
//   'Fishing','Yoga','Shooting','Spear Fishing','Pool','Hiking Trails',
//   'Quiz Nights'];
// shuffle($activity);

// for($index=0;$index<=5;$index++){
//   echo ($activity[$index]);
// }

?>
