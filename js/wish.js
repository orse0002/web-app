var newWish = function (ev) {

wish=[];
wish[0]="Better Luck Next Time";
wish[1]="I would say yes, but No";
wish[2]="No Means No... Too bad your mom didn't know that";
wish[3]="Stupid question... Are you retard strong too?";
wish[4]="Are you a Jerk Face? Yes.";

index=Math.floor(Math.random()*wish.length);

document.write("wish[index]");
};

document.getElementById('add').addEventListener('click', newWish, false);
