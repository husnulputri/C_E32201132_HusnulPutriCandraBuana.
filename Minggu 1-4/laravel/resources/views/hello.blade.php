    <head>
        <title>menampilkan gambar di HTML</title>
        <style type="text/css">

        header ul{
            position: relative;
            display: flex;
        }

        header ul li{
            list-style: none;
        }

        
        header ul li a{
            display: inline-block;
            color: #333;
            font-weight: 400;
            margin-left: 40px;
            text-decoration: none;
        }

        h1{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 45px;
        }
        h1 span{
          color: aqua;
          font-size: 1.2em;
          font-weight: 900;  
        }
        img{
            border-radius: 10px;
            display:block;
            float: right;
            margin: 10px;
        }
        a{
            display: inline-block;
            margin-top: 20px;
            padding: 8px 20px;
            background: aqua;
            color: black;
            border-radius: 40px;
            font-weight: 500;
            letter-spacing: 1 px;
        }
       
        </style>
    </head>
    <body>
    <img src="{{ ('img/boom.jpg') }}" class="img-holder" height="480px" width="700px" >
    <section>
        <header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's new</a></li>
                <li><a href="#">Contact</a></li>
             </ul>
             <hr>
        </header>
    </section>  
    <h1>Wisata Pantai <br>Boom <span>Banyuwangi<span></h1>
    <div>Pantai Boom adalah sebuah pantai yang terletak di Kelurahan 
        Kampung Mandar, Kecamatan Banyuwangi, Banyuwangi, Jawa Timur.
        Pantai ini dulunya merupakan pelabuhan.Saat ini aktivitas pelabuhan masih ada namun tidak terlalu ramai. 
        Pantai ini menjadi salah satu tujuan untuk berkumpul bagi kawula muda di Banyuwangi. 
        Selain itu, biasanya pada Minggu pagi pantai ini ramai dikunjungi oleh warga Banyuwangi.</div>
    <p>
        <a href="#"> Learn More</a>
    </p>
    </body>
