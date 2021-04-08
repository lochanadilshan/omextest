@extends('layouts.master')
@section('content')

@section('title','update Item')
@section('header')

<body>
    <br>

    @if ($errors->any())
<div class="alert alert-danger">
    {{-- <strong>Warning!</strong> Please check your inputs<br><br> --}}
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        
    </ul>
</div>
@endif

<div class="container ">
<div class="row-md">
    <div class="col ">
        <div class="card ">  
            <div class="card-header border-1 bg-dark">
                <h3 class="card-title">Update an Item</h3>
            </div>
        <div class="card-body">
     <div class="d-flex">

<form action="{{route ('items.update',$items->id)}}" class="col-md" method="POST">
    @csrf
    @method('PUT')
        <section id="cover">
            <div id="cover-caption" >
                <div id="container">
                    <div class="col-sm-10 col-sm offset-1">
                        <h3 align ="center">  </h3>
                        <br>
         <div class="form-row">
                <div class="col-12">
                    <label for="Title">Product Title</label>
                    
                    <input type="text" class="form-control shadow" id="pTitle" placeholder="ex : Gigabyte RTX 2080" name="pTitle" value="{{ $items->pTitle }}">
                </div>
        </div>
        <br>
            <div class="form-row">
                <div class="col-12">
                    <label for="Description">Product Description</label>

                    <textarea class="form-control shadow" rows="5" name="pDescription" id="pDescription"  placeholder="Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Ipsum quasi dicta 
                    praesentium quis dolores nisi porro, recusandae adipisci
                     tenetur minima expedita dolor voluptas repellendus. Voluptatibus tenetur 
                     quo nesciunt sit amet" value="{{ $items->pDescription }}"></textarea>

                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
        </div>
     <br>

     <div class="form-row">
     <div class="col-3">
        <br>
     <label for="exampleproductTitle">Price</label>
        <div class="input-group shadow ">
            <span class="input-group-text">Rs.</span>
            <input type="text" class="form-control shadow" id="pPrice" placeholder="5500.00" name="pPrice" value="{{ $items->pPrice }}">
        </div>
     </div>

    

        <div class="col-3">
            <br>
            <label for="Availability">Availability</label>
            <select  class="form-control shadow" id="pAvailability" name="pAvailability" >
        <option selected value="None" {{ ($items->pAvailability=="None")? "selected" : "" }}>None</option>
        <option value="In-Stock" {{ ($items->pAvailability=="In-Stock")? "selected" : "" }} name="pAvailability"  id="" >In-Stock</option>
        <option value="Out of Stock" {{ ($items->pAvailability=="Out of Stock")? "selected" : "" }} name="pAvailability"  id="">Out of Stock</option>
        <option value="Coming soon" {{ ($items->pAvailability=="Coming soon")? "selected" : "" }} name="pAvailability"  id="">Coming soon</option>
    </select>
    </div>

   

    <div class="col-3">
        <br>

            <label for="category">Type</label>
            <select  class="form-control shadow" id="pCategory" name="pCategory">
        <option selected value="None" {{ ($items->pCategory=="None")? "selected" : "" }} name="category">None</option>
        <option value="Monitor" {{ ($items->pCategory=="Monitor")? "selected" : "" }} name="category"  id="">Monitor</option>
        <option value="Keyboard" {{ ($items->pCategory=="Keyboard")? "selected" : "" }} name="category" id="">Keyboard</option>
        <option value="Mouse" {{ ($items->pCategory=="Mouse")? "selected" : "" }} name="category" id="">Mouse</option>
        <option value="Sound" {{ ($items->pCategory=="Sound")? "selected" : "" }} name="category" id="">Sound</option>
        <option value="Coolin Unit" {{ ($items->pCategory=="Coolin Unit")? "selected" : "" }} name="category" id="">Coolin Unit</option>
        <option value="RAM" {{ ($items->pCategory=="RAM")? "selected" : "" }} name="category" id="">RAM</option>
        <option value="Graphic Card" {{ ($items->pCategory=="Graphic Card")? "selected" : "" }} name="category" id="">Graphic Card</option>
        <option value="Processor" {{ ($items->pCategory=="Processor")? "selected" : "" }} name="category" id="">Processor</option>
        <option value="Motherboard" {{ ($items->pCategory=="Motherboard")? "selected" : "" }} name="category" id="">Motherboard</option>
        <option value="Storage" {{ ($items->pCategory=="Storage")? "selected" : "" }} name="category" id="">Storage</option>
        <option value="PSU" {{ ($items->pCategory=="PSU")? "selected" : "" }} name="category" id="">PSU</option>
        <option value="Casing" {{ ($items->pCategory=="Casing")? "selected" : "" }} name="category" id="">Casing</option>
        <option value="Laptop" {{ ($items->pCategory=="Laptop")? "selected" : "" }} name="category" id="">Laptop</option>
      </select>
    </div>

    
    <div class="col-3">
        <br>
        <label for="Manufacturer">Manufacturer</label>
        <select  class="form-control shadow" id="pManufacturer" name="pManufacturer">
    <option selected value="None" {{ ($items->pManufacturer=="None")? "selected" : "" }}>None</option>
    <option value="Intel" {{ ($items->pManufacturer=="Intel")? "selected" : "" }} name="pManufacturer"  id="">Intel</option>
    <option value="AMD" {{ ($items->pManufacturer=="AMD")? "selected" : "" }} name="pManufacturer"  id="">AMD</option>
    <option value="Asus" {{ ($items->pManufacturer=="Asus")? "selected" : "" }} name="pManufacturer"  id="">Asus</option>
    <option value="Gigabyte" {{ ($items->pManufacturer=="Gigabyte")? "selected" : "" }} name="pManufacturer"  id="">Gigabyte</option>
    <option value="MSI" {{ ($items->pManufacturer=="MSI")? "selected" : "" }} name="pManufacturer"  id="">MSI</option>
    <option value="Zotac" {{ ($items->pManufacturer=="Zotac")? "selected" : "" }} name="pManufacturer"  id="">Zotac</option>
    <option value="Armaggeddon" {{ ($items->pManufacturer=="Armaggeddon")? "selected" : "" }} name="pManufacturer"  id="">Armaggeddon</option>
    <option value="cooler Master" {{ ($items->pManufacturer=="cooler Master")? "selected" : "" }} name="pManufacturer"  id="">cooler Master</option>
    <option value="NZXT" {{ ($items->pManufacturer=="NZXT")? "selected" : "" }} name="pManufacturer"  id="">NZXT</option>
    <option value="Prolink" {{ ($items->pManufacturer=="Prolink")? "selected" : "" }} name="pManufacturer"  id="">Prolink</option>
    <option value="Silverstone" {{ ($items->pManufacturer=="Silverstone")? "selected" : "" }} name="pManufacturer"  id="">Silverstone</option>
    <option value="Thermaltake" {{ ($items->pManufacturer=="Thermaltake")? "selected" : "" }} name="pManufacturer"  id="">Thermaltake</option>
    <option value="Adata" {{ ($items->pManufacturer=="Adata")? "selected" : "" }} name="pManufacturer"  id="">Adata</option>
    <option value="Kingston" {{ ($items->pManufacturer=="Kingston")? "selected" : "" }} name="pManufacturer"  id="">Kingston</option>
    <option value="Corsair" {{ ($items->pManufacturer=="Corsair")? "selected" : "" }} name="pManufacturer"  id="">Corsair</option>
    <option value="Apacer" {{ ($items->pManufacturer=="Apacer")? "selected" : "" }} name="pManufacturer"  id="">Apacer</option>
    <option value="Lexar" {{ ($items->pManufacturer=="Lexar")? "selected" : "" }} name="pManufacturer"  id="">Lexar</option>
    <option value="PNY" {{ ($items->pManufacturer=="PNY")? "selected" : "" }} name="pManufacturer"  id="">PNY</option>
    <option value="Samsung" {{ ($items->pManufacturer=="Samsung")? "selected" : "" }} name="pManufacturer"  id="">Samsung</option>
    <option value="Seagate" {{ ($items->pManufacturer=="Seagate")? "selected" : "" }} name="pManufacturer"  id="">Seagate</option>
    <option value="Team" {{ ($items->pManufacturer=="Team")? "selected" : "" }} name="pManufacturer"  id="">Team</option>
    <option value="Toshiba" {{ ($items->pManufacturer=="Toshiba")? "selected" : "" }} name="pManufacturer"  id="">Toshiba</option>
    <option value="Western Digital" {{ ($items->pManufacturer=="Western Digital")? "selected" : "" }} name="pManufacturer"  id="">Western Digital</option>
    <option value="Fantech" {{ ($items->pManufacturer=="Fantech")? "selected" : "" }} name="pManufacturer"  id="">Fantech</option>
    <option value="Gamdias" {{ ($items->pManufacturer=="Gamdias")? "selected" : "" }} name="pManufacturer"  id="">Gamdias</option>
    <option value="HyperX" {{ ($items->pManufacturer=="HyperX")? "selected" : "" }} name="pManufacturer"  id="">HyperX</option>
    <option value="Logitech" {{ ($items->pManufacturer=="Logitech")? "selected" : "" }} name="pManufacturer"  id="">Logitech</option>
    <option value="Acer" {{ ($items->pManufacturer=="Acer")? "selected" : "" }} name="pManufacturer"  id="">Acer</option>
    <option value="BenQ" {{ ($items->pManufacturer=="BenQ")? "selected" : "" }} name="pManufacturer"  id="">BenQ</option>
    <option value="Dell" {{ ($items->pManufacturer=="Dell")? "selected" : "" }} name="pManufacturer"  id="">Dell</option>
    <option value="Viewsonic" {{ ($items->pManufacturer=="Viewsonic")? "selected" : "" }} name="pManufacturer"  id="">Viewsonic</option>
    <option value="Lenovo" {{ ($items->pManufacturer=="Lenovo")? "selected" : "" }} name="pManufacturer"  id="">Lenovo</option>
    <option value="Xiomi" {{ ($items->pManufacturer=="Xiomi")? "selected" : "" }} name="pManufacturer"  id="">Xiomi</option>
</select>
</div>

    

<div class="col-3">
    <br>
    <label for="Chipset">Chipset</label>
    <select  class="form-control shadow" id="pChipset" name="pChipset" value="{{ old('pChipset') }}">
<option selected value="None" {{ ($items->pChipset=="None")? "selected" : "" }}>None</option>
<option value="GT 1030" {{ ($items->pChipset=="GT 1030")? "selected" : "" }} name="pChipset"  id="">GT 1030</option>
<option value="GT 710" {{ ($items->pChipset=="GT 710")? "selected" : "" }} name="pChipset"  id="">GT 710</option>
<option value="GTX 1050 TI" {{ ($items->pChipset=="GTX 1050 TI")? "selected" : "" }} name="pChipset"  id="">GTX 1050 TI</option>
<option value="GTX 1650" {{ ($items->pChipset=="GTX 1650")? "selected" : "" }} name="pChipset"  id="">GTX 1650</option>
<option value="GTX 1650 SUPER" {{ ($items->pChipset=="GTX 1650 SUPER")? "selected" : "" }} name="pChipset"  id="">GTX 1650 SUPER</option>
<option value="GTX 1660 SUPER" {{ ($items->pChipset=="GTX 1660 SUPER")? "selected" : "" }} name="pChipset"  id="">GTX 1660 SUPER</option>
<option value="GTX 1660 TI" {{ ($items->pChipset=="GTX 1660 TI")? "selected" : "" }} name="pChipset"  id="">GTX 1660 TI</option>
<option value="RTX 2070 SUPER" {{ ($items->pChipset=="RTX 2070 SUPER")? "selected" : "" }} name="pChipset"  id="">RTX 2070 SUPER</option>
<option value="RTX 2080 SUPER" {{ ($items->pChipset=="RTX 2080 SUPER")? "selected" : "" }} name="pChipset"  id="">RTX 2080 SUPER</option>
<option value="RTX 3060TI" {{ ($items->pChipset=="RTX 3060TI")? "selected" : "" }} name="pChipset"  id="">RTX 3060TI</option>
<option value="RTX 3070" {{ ($items->pChipset=="RTX 3070")? "selected" : "" }} name="pChipset"  id="">RTX 3070</option>
<option value="RTX 3080" {{ ($items->pChipset=="RTX 3080")? "selected" : "" }} name="pChipset"  id="">RTX 3080</option>
<option value="RTX 3090" {{ ($items->pChipset=="RTX 3090")? "selected" : "" }} name="pChipset"  id="">RTX 3090</option>
<option value="RX 5500XT" {{ ($items->pChipset=="RX 5500XT")? "selected" : "" }} name="pChipset"  id="">RX 5500XT</option>
<option value="RX 5700" {{ ($items->pChipset=="RX 5700")? "selected" : "" }} name="pChipset"  id="">RX 5700</option>
<option value="RX 5700XT" {{ ($items->pChipset=="RX 5700XT")? "selected" : "" }} name="pChipset"  id="">RX 5700XT</option>
<option value="RX 580" {{ ($items->pChipset=="RX 580")? "selected" : "" }} name="pChipset"  id="">RX 580</option>

</select>
</div>



<div class="col-3">
    <br>
    <label for="Size">Size</label>
    <select  class="form-control shadow" id="pSize" name="pSize" value="{{ old('pSize') }}">
<option selected value="None" {{ ($items->pSize=="None")? "selected" : "" }}>None</option>
<option value="1 GB" {{ ($items->pSize=="1 GB")? "selected" : "" }} name="pSize"  id="">1 GB</option>
<option value="2 GB" {{ ($items->pSize=="2 GB")? "selected" : "" }} name="pSize"  id="">2 GB</option>
<option value="4 GB" {{ ($items->pSize=="4 GB")? "selected" : "" }} name="pSize"  id="">4 GB</option>
<option value="8 GB" {{ ($items->pSize=="8 GB")? "selected" : "" }} name="pSize"  id="">8 GB</option>
<option value="16 GB" {{ ($items->pSize=="16 GB")? "selected" : "" }} name="pSize"  id="">16 GB</option>
<option value="32 GB" {{ ($items->pSize=="32 GB")? "selected" : "" }} name="pSize"  id="">32 GB</option>
<option value="64 GB" {{ ($items->pSize=="64 GB")? "selected" : "" }} name="pSize"  id="">64 GB</option>
<option value="128 GB" {{ ($items->pSize=="128 GB")? "selected" : "" }} name="pSize"  id="">128 GB</option>
<option value="256 GB" {{ ($items->pSize=="256 GB")? "selected" : "" }} name="pSize"  id="">256 GB</option>
<option value="512 GB" {{ ($items->pSize=="512 GB")? "selected" : "" }} name="pSize"  id="">512 GB</option>
<option value="1 TB" {{ ($items->pSize=="1 TB")? "selected" : "" }} name="pSize"  id="">1 TB</option>
<option value="2 TB" {{ ($items->pSize=="2 TB")? "selected" : "" }} name="pSize"  id="">2 TB</option>
<option value="4 TB" {{ ($items->pSize=="ffff")? "selected" : "" }} name="pSize"  id="">4 TB</option>

</select>
</div>




<div class="col-3">
    <br>
    <label for="Resolution">Resolution</label>
    <select  class="form-control shadow" id="pResolution" name="pResolution" value="{{ old('pResolution') }}">
<option selected value="None" {{ ($items->pResolution=="None")? "selected" : "" }}>None</option>
<option value="1366 X 768" {{ ($items->pResolution=="1366 X 768")? "selected" : "" }} name="pResolution"  id="">1366 X 768</option>
<option value="1920 X 1080" {{ ($items->pResolution=="1920 X 1080")? "selected" : "" }} name="pResolution"  id="">1920 X 1080</option>
<option value="1920 X 1200" {{ ($items->pResolution=="1920 X 1200")? "selected" : "" }} name="pResolution"  id="">1920 X 1200</option>
<option value="2560 X 1440" {{ ($items->pResolution=="2560 X 1440")? "selected" : "" }} name="pResolution"  id="">2560 X 1440</option>
<option value="3440 X 1440" {{ ($items->pResolution=="3440 X 1440")? "selected" : "" }} name="pResolution"  id="">3440 X 1440</option>
<option value="3840 X 1080" {{ ($items->pResolution=="3840 X 1080")? "selected" : "" }} name="pResolution"  id="">3840 X 1080</option>
<option value="3840 X 2160" {{ ($items->pResolution=="3840 X 2160")? "selected" : "" }} name="pResolution"  id="">3840 X 2160</option>
</select>
</div>




<div class="col-3">
    <br>
    <label for="Screen Size">Screen Size</label>
    <select  class="form-control shadow" id="pScreenSize" name="pScreenSize" value="{{ old('pScreenSize') }}">
<option selected value="None" {{ ($items->pScreenSize=="None")? "selected" : "" }}>None</option>
<option value="19 INCH" {{ ($items->pScreenSize=="19 INCH")? "selected" : "" }} name="pScreenSize"  id="">19 INCH</option>
<option value="19 INCH" {{ ($items->pScreenSize=="19 INCH")? "selected" : "" }} name="pScreenSize"  id="">22 INCH</option>
<option value="24 INCH" {{ ($items->pScreenSize=="24 INCH")? "selected" : "" }} name="pScreenSize"  id="">24 INCH</option>
<option value="25 INCH" {{ ($items->pScreenSize=="25 INCH")? "selected" : "" }} name="pScreenSize"  id="">25 INCH</option>
<option value="27 INCH" {{ ($items->pScreenSize=="27 INCH")? "selected" : "" }} name="pScreenSize"  id="">27 INCH</option>
<option value="32 INCH" {{ ($items->pScreenSize=="32 INCH")? "selected" : "" }} name="pScreenSize"  id="">32 INCH</option>
<option value="34 INCH" {{ ($items->pScreenSize=="34 INCH")? "selected" : "" }} name="pScreenSize"  id="">34 INCH</option>
<option value="49 INCH" {{ ($items->pScreenSize=="49 INCH")? "selected" : "" }} name="pScreenSize"  id="">49 INCH</option>
</select>
</div>



<div class="col-3">
    <br>
    <label for="Panel Type">Panel Type</label>
    <select  class="form-control shadow" id="pPanelType" name="pPanelType" value="{{ old('pPanelType') }}">
<option selected value="None" {{ ($items->pPanelType=="None")? "selected" : "" }}>None</option>
<option value="IPS" {{ ($items->pPanelType=="IPS")? "selected" : "" }} name="pPanelType"  id="">IPS</option>
<option value="PLS" {{ ($items->pPanelType=="PLS")? "selected" : "" }} name="pPanelType"  id="">PLS</option>
<option value="TN" {{ ($items->pPanelType=="TN")? "selected" : "" }} name="pPanelType"  id="">TN</option>
<option value="VA" {{ ($items->pPanelType=="VA")? "selected" : "" }} name="pPanelType"  id="">VA</option>

</select>
</div>



<div class="col-3">
    <br>
    <label for="Refresh Rate">Refresh Rate</label>
    <select  class="form-control shadow" id="pRefreshRate" name="pRefreshRate" value="{{ old('pRefreshRate') }}">
<option selected value="None" {{ ($items->pRefreshRate=="None")? "selected" : "" }}>None</option>
<option value="100HZ" {{ ($items->pRefreshRate=="100HZ")? "selected" : "" }} name="pRefreshRate"  id="">100HZ</option>
<option value="120HZ" {{ ($items->pRefreshRate=="120HZ")? "selected" : "" }} name="pRefreshRate"  id="">120HZ</option>
<option value="144HZ" {{ ($items->pRefreshRate=="144HZ")? "selected" : "" }} name="pRefreshRate"  id="">144HZ</option>
<option value="165HZ" {{ ($items->pRefreshRate=="165HZ")? "selected" : "" }} name="pRefreshRate"  id="">165HZ</option>
<option value="170HZ" {{ ($items->pRefreshRate=="170HZ")? "selected" : "" }} name="pRefreshRate"  id="">170HZ</option>
<option value="280HZ" {{ ($items->pRefreshRate=="280HZ")? "selected" : "" }} name="pRefreshRate"  id="">280HZ</option>
<option value="60HZ" {{ ($items->pRefreshRate=="60HZ")? "selected" : "" }} name="pRefreshRate"  id="">60HZ</option>
<option value="75HZ" {{ ($items->pRefreshRate=="75HZ")? "selected" : "" }} name="pRefreshRate"  id="">75HZ</option>

</select>
</div>
     </div>

    </div>
                   
                       
            <br>

    <div class="text-right">
        <button type="submit" class="btn btn-info btn-md shadow" value="Sign up" onclick="setTimeout(myFunction, 1000)">Update an Item</button>
        {{-- popup alert --}}
            <script>
                    function myFunction() {
                    alert('please fillout details');
                    }
            </script>
        &nbsp    
        <button type="reset" class="btn btn-danger btn-md shadow" value="Clear">Cancel</button> 
    </div>
                    </div>
                </div>
            </div>
            
</section>
</form>
     </div>
        </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
<br>


@endsection