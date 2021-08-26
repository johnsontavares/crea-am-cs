<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/home/johnsontavares/Desktop/CREA-AM/crea-cs/public/table.css" media="screen" />
    <title>Codeigniter </title>

    <style >
    body{

    }
      
      h1{
        font-size: 160px;
        color: blue;
      }

      button{
      
        font-size: 20px;
        background-color: #FFFF00;
        border-color: white;
        padding: 20px;
        /* margin-left: 250px; */
      }

      table{
        margin-bottom : .5em;
        table-layout: fixed;
        text-align: center;
        margin-left: 600px;
        margin-top: 100px;
      }

      table, th, td {
        border: 1px solid transparent;
        /* border: 5px solid black; */
        /* margin-left:-100px; */
      }

      table th #column_name{
        font-size: 20px;
        /* margin-left: 20px; */
        font-weight: bold;
        text-align: center;
        background-color: #FF7F00;
        padding : 8px;
        margin-bottom: 16px;
        
      }

      table th .column_name_subject{
        margin-left: -90px;
        margin-right: 40px;
        /* width: 50px; */
      }

      table td #subject{
        font-size: 20px;
        font-weight: bold;
        background-color: #0000FF;
        border-color: white;
        padding: 20px;
        margin-left: -90px;
        width: 150px;
      }


      table td #called{
        background-color: #000080;
        /* margin-bottom: 20px; */
        padding: 10px;
        color: #fff;
        font-weight: bold;
        font-size: 22px;
        
      }

      table td #whatsapp{
        background-color: #0000CD;
        /* margin-bottom: 20px; */
        padding: 10px;
        color: #fff;
        font-weight: bold;
        font-size: 22px;
        
      }


      



    </style>



  </head>

  <body>

          
          <table width="45%" border="1" cellspacing="10" cellpadding="4">
                <tr>
                  <th> <div id="column_name" class="column_name_subject">Assunto</div></th>
                  <!-- <th><div id="column_name"> Telefonemas </div></th> -->
                  <th><div id="column_name">Ligações  </div></th>
                  <th></th>
                  <th><div id="column_name">Whatsapp</div></th>
                  <!-- <th><div id="column_name">  </div> </th> -->
                  <!-- <th>Profissao</th> -->
                </tr>
             
             <tr>                  
                 <!-- <td>Campo de arquivo:</td> -->
                <td>           
                  <div id="subject">
                    PROFISSIONAL
                  </div >
                </td>

                <td>
                    <div id = "called">
                      2 ligações
                    </div>
                </td>

                 <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td>   
                  <td >                    
                   <div id = "whatsapp">
                        2 whatsapp
                    </div>
                  </td>      
                  <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td>      
             </tr>  

             <tr>                  
                 <td>           
                  <div id="subject">
                    FISCALIZAÇÃO
                    
                  </div >
                </td>
                <td id = "called">
                  <div id = "called">
                      2 ligações
                    </div>
                </td>
                 <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td>              
                  <td>                    
                   <div id = "whatsapp">
                        2 whatsapp
                    </div>
                  </td> 
                  <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td> 
             </tr> 

             <tr>                  
                 <td>           
                  <div id="subject">
                    <label htmlFor="title">DÍVIDA ATIVA</label>
                    

                  </div >
                </td>

                <td>
                   <div id = "called">
                      2 ligações
                    </div>
                </td>

                 <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td> 
                  <td>                    
                   <div id = "whatsapp">
                        2 whatsapp
                    </div>
                  </td> 
                  <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td>   
                               
             </tr>

             <tr>                  
                 <td>           
                  <div id="subject">
                    <label htmlFor="title">ACERVO TÉCNICO</label>
                    


                  </div >
                </td>
                <td>
                  <div id = "called">
                        2 ligações
                      </div>
               </td>

                 <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td>     
                  <td>                    
                   <div id = "whatsapp">
                        2 whatsapp
                    </div>
                  </td> 
                  <td>                    
                   <button id="button_increment">
                        +
                    </button>
                  </td>   
                       
                    
             </tr>
     
         </table>
  
            <!-- </div> -->
              
  </body>
</html>