function rand(min,max) {

    var ans = Math.floor(Math.random()*(max-min+1)+min);

     return ans;
    
}
                                                                                                                                      
document.write(rand(10,20));