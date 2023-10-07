
<style>

@import url('https://fonts.cdnfonts.com/css/work-sans');
@import url('https://fonts.cdnfonts.com/css/staatliches-2');
                
#emailCont {
    display:flex;
    flex-direction:column;
    padding:5%; 
}
#eHeader {
    display:flex;
    flex-direction:row;
    background:#006400;
    justify-content: space-around;
    padding:10px;
    height:90px; 
}
#eHeader img {
    width:128px;
    height:128px; 
}
#eBody {
    display:flex;
    flex-direction:column; 
    padding:10%;
}
#emailCont h1{
    font-family:'Staatliches', sans-serif; 
    color:#CCFF33; 
}
a {
    color: #16ab37;
}
#eBody p{
    font-family:Helvetica, Arial, sans-serif; 
}
#eBody h1 {
    color:#006400; 
}
span {
    font-family:'Work Sans', Arial, sans-serif; 
    color:white;
}
</style>
<div id="emailCont">
    <div id="eHeader">
        <h1> Freeman's <br><span> Mowing </span></h1>
        <img src="{{url('images/mowgo.png')}}" />
    </div>
    <div id="eBody">
        <h1><span style="color:black;">Sender:</span> {{$data->name}} </h1>
        <a href="mailto:{{$data->email}}">{{$data->email}} </a>
        <p>{{$data->note}}</p>
    </div>
</div>