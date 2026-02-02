  function showoffer(){
            alert("🎉 Flat 35% off")
        }

        function placeorder(){
let result=confirm("Are u sure to add in to the cart")
if(result){
    alert("Added to cart successfully ✅")
}
else{
    alert("order cancelled ❌")
}

}
function placeorder1(id,name,price,image){
let cart=JSON.parse(localStorage.getItem("cart"))||[];
let existingItem=cart.find(item=>item.id==id);
if(existingItem){
    existingItem.quantity+=1
}else{
    cart.push({
id:id,
name:name,
price:price,
image:image,
quantity:1

    })
}
localStorage.setItem("cart",JSON.stringify(cart))
alert(name+ "added to cart")

}