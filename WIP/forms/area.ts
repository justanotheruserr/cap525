interface Dimensions {
  length:number,
  width:number
}
var area = (d:Dimensions)=>{
  console.log(`Area::${d.length*d.width}`);
}
area
( {length: 10,width: 90} );
