menubtn.addEventListener('click',function ab(){
    if(document.getElementById('menubtn').classList.contains('btn-primary')){
      document.getElementById('menubtn').classList.add('btn-danger');
      document.getElementById('xmark').classList.remove('off');
      document.getElementById('bar').classList.add('off');

    document.getElementById('links').classList.remove('off');
    document.getElementById('links').classList.add('link1');
    document.getElementById('menubtn').classList.remove('btn-primary');
   
    
    
    }else{
      document.getElementById('menubtn').classList.remove('btn-danger');
      document.getElementById('menubtn').classList.add('btn-primary');
      document.getElementById('xmark').classList.add('off');
      document.getElementById('bar').classList.remove('off');


      document.getElementById('links').classList.add('off');
    document.getElementById('links').classList.remove('link1');
    }
   
    
  });