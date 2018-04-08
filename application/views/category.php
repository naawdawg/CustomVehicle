

<h1>Catalog</h1>


<div id="body">
    <p>List of all accessories available</p>
        
    <table style="width:100%">
        <tr>
            <th align="left">Accessory Id</th> 
            <th align="left">Description</th>
            <th align="left">Cost</th>
            <th align="left">Popularity</th>
            <th align="left">Quality</th>
            <th></th>
        </tr>
        {bodyColours}
        <tr>
            
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
            <td><img src="{Path}" style="width:200px"></td>
            
        </tr>
        {/bodyColours}
        
        {rims}
        <tr>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
            <td><img src="{Path}" style="width:200px"></td>
            
        </tr>
        {/rims}
        
        {spoilers}
        <tr>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
            <td><img src="{Path}" style="width:200px"></td>
        </tr>
        {/spoilers}
        
        {storages}
        <tr>
            <td>{AccessoryId}</td> 
            <td>{Description}</td>
            <td>{Cost}</td>
            <td>{Popularity}</td>
            <td>{Quality}</td>
            <td><img src="{Path}" style="width:200px"></td>
        </tr>
        {/storages}
        
    </table>
    
        
    
</div>