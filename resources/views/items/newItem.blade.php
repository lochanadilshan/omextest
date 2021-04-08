@extends('layouts.master')
@section('content')

@section('title','Add new Item')
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

<div class="container">
<div class="row-md">
    <div class="col">
        <div class="card">  
            <div class="card-header border-1">
                <h3 class="card-title">Add new Item</h3>
            </div>
        <div class="card-body">
     <div class="d-flex">

<form action="{{route('items.store')}} " class="col-md" method="POST">
    @csrf
        <section id="cover">
            <div id="cover-caption" >
                <div id="container">
                    <div class="col-sm-10 col-sm offset-1">
                        <h3 align ="center">  </h3>
                        <br>
         <div class="form-row">
                <div class="col-12">
                    <label for="Title">Product Title</label>
                    
                    <input type="text" class="form-control shadow" id="pTitle" placeholder="ex : Gigabyte RTX 2080" name="pTitle" value="{{ old('pTitle') }}">
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
                     quo nesciunt sit amet" value="{{ old('pDescription') }}"></textarea>

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
            <input type="text" class="form-control shadow" id="pPrice" placeholder="5500.00" name="pPrice" value="{{ old('pPrice') }}">
        </div>
     </div>

    

        <div class="col-3">
            <br>
            <label for="Availability">Availability</label>
            <select  class="form-control shadow" id="pAvailability" name="pAvailability">
        <option selected value="None">None</option>
        <option value="In-Stock" name="pAvailability"  id="">In-Stock</option>
        <option value="Out of Stock" name="pAvailability"  id="">Out of Stock</option>
        <option value="Coming soon" name="pAvailability"  id="">Coming soon</option>
    </select>
    </div>

   

    <div class="col-3">
        <br>

            <label for="category">Type</label>
            <select  class="form-control shadow" id="pCategory" name="pCategory">
        <option selected value="None" name="category">None</option>
        <option value="Monitor" name="category"  id="">Monitor</option>
        <option value="Keyboard" name="category" id="">Keyboard</option>
        <option value="Mouse" name="category" id="">Mouse</option>
        <option value="Sound" name="category" id="">Sound</option>
        <option value="Coolin Unit" name="category" id="">Coolin Unit</option>
        <option value="RAM" name="category" id="">RAM</option>
        <option value="Graphic Card" name="category" id="">Graphic Card</option>
        <option value="Processor" name="category" id="">Processor</option>
        <option value="Motherboard" name="category" id="">Motherboard</option>
        <option value="Storage" name="category" id="">Storage</option>
        <option value="PSU" name="category" id="">PSU</option>
        <option value="Casing" name="category" id="">Casing</option>
        <option value="Laptop" name="category" id="">Laptop</option>
      </select>
    </div>

    
    <div class="col-3">
        <br>
        <label for="Manufacturer">Manufacturer</label>
        <select  class="form-control shadow" id="pManufacturer" name="pManufacturer">
    <option selected value="None">None</option>
    <option value="Intel" name="pManufacturer"  id="">Intel</option>
    <option value="AMD" name="pManufacturer"  id="">AMD</option>
    <option value="Asus" name="pManufacturer"  id="">Asus</option>
    <option value="Gigabyte" name="pManufacturer"  id="">Gigabyte</option>
    <option value="MSI" name="pManufacturer"  id="">MSI</option>
    <option value="Zotac" name="pManufacturer"  id="">Zotac</option>
    <option value="Armaggeddon" name="pManufacturer"  id="">Armaggeddon</option>
    <option value="cooler Master" name="pManufacturer"  id="">cooler Master</option>
    <option value="NZXT" name="pManufacturer"  id="">NZXT</option>
    <option value="Prolink" name="pManufacturer"  id="">Prolink</option>
    <option value="Silverstone" name="pManufacturer"  id="">Silverstone</option>
    <option value="Thermaltake" name="pManufacturer"  id="">Thermaltake</option>
    <option value="Adata" name="pManufacturer"  id="">Adata</option>
    <option value="Kingston" name="pManufacturer"  id="">Kingston</option>
    <option value="Corsair" name="pManufacturer"  id="">Corsair</option>
    <option value="Apacer" name="pManufacturer"  id="">Apacer</option>
    <option value="Lexar" name="pManufacturer"  id="">Lexar</option>
    <option value="PNY" name="pManufacturer"  id="">PNY</option>
    <option value="Samsung" name="pManufacturer"  id="">Samsung</option>
    <option value="Seagate" name="pManufacturer"  id="">Seagate</option>
    <option value="Team" name="pManufacturer"  id="">Team</option>
    <option value="Toshiba" name="pManufacturer"  id="">Toshiba</option>
    <option value="Western Digital" name="pManufacturer"  id="">Western Digital</option>
    <option value="Fantech" name="pManufacturer"  id="">Fantech</option>
    <option value="Gamdias" name="pManufacturer"  id="">Gamdias</option>
    <option value="HyperX" name="pManufacturer"  id="">HyperX</option>
    <option value="Logitech" name="pManufacturer"  id="">Logitech</option>
    <option value="Acer" name="pManufacturer"  id="">Acer</option>
    <option value="BenQ" name="pManufacturer"  id="">BenQ</option>
    <option value="Dell" name="pManufacturer"  id="">Dell</option>
    <option value="Viewsonic" name="pManufacturer"  id="">Viewsonic</option>
    <option value="Lenovo" name="pManufacturer"  id="">Lenovo</option>
    <option value="Xiomi" name="pManufacturer"  id="">Xiomi</option>
</select>
</div>

    

<div class="col-3">
    <br>
    <label for="Chipset">Chipset</label>
    <select  class="form-control shadow" id="pChipset" name="pChipset" value="{{ old('pChipset') }}">
<option selected value="None">None</option>
<option value="GT 1030" name="pChipset"  id="">GT 1030</option>
<option value="GT 710" name="pChipset"  id="">GT 710</option>
<option value="GTX 1050 TI" name="pChipset"  id="">GTX 1050 TI</option>
<option value="GTX 1650" name="pChipset"  id="">GTX 1650</option>
<option value="GTX 1650 SUPER" name="pChipset"  id="">GTX 1650 SUPER</option>
<option value="GTX 1660 SUPER" name="pChipset"  id="">GTX 1660 SUPER</option>
<option value="GTX 1660 TI" name="pChipset"  id="">GTX 1660 TI</option>
<option value="RTX 2070 SUPER" name="pChipset"  id="">RTX 2070 SUPER</option>
<option value="RTX 2080 SUPER" name="pChipset"  id="">RTX 2080 SUPER</option>
<option value="RTX 3060TI" name="pChipset"  id="">RTX 3060TI</option>
<option value="RTX 3070" name="pChipset"  id="">RTX 3070</option>
<option value="RTX 3080" name="pChipset"  id="">RTX 3080</option>
<option value="RTX 3090" name="pChipset"  id="">RTX 3090</option>
<option value="RX 5500XT" name="pChipset"  id="">RX 5500XT</option>
<option value="RX 5700" name="pChipset"  id="">RX 5700</option>
<option value="RX 5700XT" name="pChipset"  id="">RX 5700XT</option>
<option value="RX 580" name="pChipset"  id="">RX 580</option>

</select>
</div>



<div class="col-3">
    <br>
    <label for="Size">Size</label>
    <select  class="form-control shadow" id="pSize" name="pSize" value="{{ old('pSize') }}">
<option selected value="None">None</option>
<option value="1 GB" name="pSize"  id="">1 GB</option>
<option value="2 GB" name="pSize"  id="">2 GB</option>
<option value="4 GB" name="pSize"  id="">4 GB</option>
<option value="8 GB" name="pSize"  id="">8 GB</option>
<option value="16 GB" name="pSize"  id="">16 GB</option>
<option value="32 GB" name="pSize"  id="">32 GB</option>
<option value="64 GB" name="pSize"  id="">64 GB</option>
<option value="128 GB" name="pSize"  id="">128 GB</option>
<option value="256 GB" name="pSize"  id="">256 GB</option>
<option value="512 GB" name="pSize"  id="">512 GB</option>
<option value="1 TB" name="pSize"  id="">1 TB</option>
<option value="2 TB" name="pSize"  id="">2 TB</option>
<option value="4 TB" name="pSize"  id="">4 TB</option>

</select>
</div>




<div class="col-3">
    <br>
    <label for="Resolution">Resolution</label>
    <select  class="form-control shadow" id="pResolution" name="pResolution" value="{{ old('pResolution') }}">
<option selected value="None">None</option>
<option value="1366 X 768" name="pResolution"  id="">1366 X 768</option>
<option value="1920 X 1080" name="pResolution"  id="">1920 X 1080</option>
<option value="1920 X 1200" name="pResolution"  id="">1920 X 1200</option>
<option value="2560 X 1440" name="pResolution"  id="">2560 X 1440</option>
<option value="3440 X 1440" name="pResolution"  id="">3440 X 1440</option>
<option value="3840 X 1080" name="pResolution"  id="">3840 X 1080</option>
<option value="3840 X 2160" name="pResolution"  id="">3840 X 2160</option>
</select>
</div>




<div class="col-3">
    <br>
    <label for="Screen Size">Screen Size</label>
    <select  class="form-control shadow" id="pScreenSize" name="pScreenSize" value="{{ old('pScreenSize') }}">
<option selected value="None">None</option>
<option value="19 INCH" name="pScreenSize"  id="">19 INCH</option>
<option value="22 INCH" name="pScreenSize"  id="">22 INCH</option>
<option value="24 INCH" name="pScreenSize"  id="">24 INCH</option>
<option value="25 INCH" name="pScreenSize"  id="">25 INCH</option>
<option value="27 INCH" name="pScreenSize"  id="">27 INCH</option>
<option value="32 INCH" name="pScreenSize"  id="">32 INCH</option>
<option value="34 INCH" name="pScreenSize"  id="">34 INCH</option>
<option value="49 INCH" name="pScreenSize"  id="">49 INCH</option>
</select>
</div>



<div class="col-3">
    <br>
    <label for="Panel Type">Panel Type</label>
    <select  class="form-control shadow" id="pPanelType" name="pPanelType" value="{{ old('pPanelType') }}">
<option selected value="None">None</option>
<option value="IPS" name="pPanelType"  id="">IPS</option>
<option value="PLS" name="pPanelType"  id="">PLS</option>
<option value="TN" name="pPanelType"  id="">TN</option>
<option value="VA" name="pPanelType"  id="">VA</option>

</select>
</div>



<div class="col-3">
    <br>
    <label for="Refresh Rate">Refresh Rate</label>
    <select  class="form-control shadow" id="pRefreshRate" name="pRefreshRate" value="{{ old('pRefreshRate') }}">
<option selected value="None">None</option>
<option value="100HZ" name="pRefreshRate"  id="">100HZ</option>
<option value="120HZ" name="pRefreshRate"  id="">120HZ</option>
<option value="144HZ" name="pRefreshRate"  id="">144HZ</option>
<option value="165HZ" name="pRefreshRate"  id="">165HZ</option>
<option value="170HZ" name="pRefreshRate"  id="">170HZ</option>
<option value="280HZ" name="pRefreshRate"  id="">280HZ</option>
<option value="60HZ" name="pRefreshRate"  id="">60HZ</option>
<option value="75HZ" name="pRefreshRate"  id="">75HZ</option>

</select>
</div>
     </div>

    </div>
                   
                       
            <br>

    <div class="text-right">
        <button type="submit" class="btn btn-info btn-md shadow" value="Sign up" onclick="setTimeout(myFunction, 1000)">Add New Item</button>
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
