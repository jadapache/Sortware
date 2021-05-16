

@if ($errors->any())
    <div {{ $attributes }}>

        
 <div class="alertas">
    <div class="bg-red-50 p-4 rounded flex items-start text-red-600 my-4 shadow-lg max-w-xl mx-auto" style="">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <div class=" px-3" style="margin:0 0 0 15px">
                <ul class="mt-2 list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </ul>
        </div>
    </div>
    </div>
    </div>

    <script> 
        function closeit(){ 
        document.getElementById('alertas').setAttribute("style", "display:none");
    } 
    setTimeout("closeit", 3000);
    </script>     
@endif