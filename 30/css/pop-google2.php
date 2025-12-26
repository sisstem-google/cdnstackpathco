.lds-ring,
.lds-ring div {
  box-sizing: border-box;
}
.lds-ring {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  margin-top:70px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid #0B57CF;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #0B57CF transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.form {
  width: 100%;
  padding: 0px 15px;
  border-radius: 3px;
  box-shadow: 0 10px 25px rgba(92, 99, 105, 0.2);  
}
.form__div {
  position: relative;
  height: 50px;
  margin-bottom: 15px;  
}
.showpass {
  position: relative;
  height: 50px;
  margin-top: 0px;  
}
.showpass label {
  position: relative;
  margin-top: 2px;  
  margin-left: 4px;
  font-size:11px; 
  color:#000;
}
.form__input {
  position: absolute;
  top: -1;
  left: 0;
  width: 100%;
  height: 100%;
  border: 1px solid #AFB0AF;
  border-radius: 3px;
  color: #454746;
  outline: none;
  padding: 10px;
  background: none;
  font-size: 16px;
  font-weight: 400;
  font-family: 'Open Sans', sans-serif;
  z-index: 1;
}
.form__label {
  position: absolute;
  left: 10px;
  top: 1rem;
  padding: 0 5px;
  background-color: #fff;
  color: #454746;  
  transition: 0.3s;
  font-size: 11px;
  font-weight: 400;
}
/*Input focus move up label*/
.form__input:focus + .form__label {
  top: -0.4rem;
  left: 0.5rem;
  color: #0B57CF;
  font-size: 11px;
  font-weight: 400;
  z-index: 10;
}
/*Input focus sticky top label*/
.form__input:not(:placeholder-shown).form__input:not(:focus) + .form__label {
  top: -0.4rem;
  left: 0.5rem;
  z-index: 10;  
  font-weight: 400;
  font-size: 11px;
}
/*Input focus*/
.form__input:focus {
  border: 2px solid #0B57CF;
  font-size: 16px;
}
.header-gg {
    background: #fff;
    width: 100%;
	height: 40px;
	padding: 8px;	
    border-radius: 5px 5px 0px 0px;
    border-bottom: 1px solid #E5EAED;
    margin-bottom: 20px;
	position: relative;	
}
.header-gg img {
    width: 20px;
    height: 20px;
    float:left;    
    display: block;
    margin-top:1px;
    margin-left:2px;
    margin-right:-10px;    
}
.header-gg-text {
    color: #000;
	font-size: 15px;
	font-weight: 500;
    font-family: 'Open Sans', sans-serif;
	text-align: center;
	margin-top:2px;
	padding-left:-2px;
}
.txt-login-gg {
	padding-top: 1px;
	padding-left: 2px;	
    color: #000;
    text-align: left;
    font-size: 25px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 3%;
}
.txt-login-ggs {
	padding-top: 1px;
	padding-left: 2px;	
    color: #000;
    text-align: left;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 10%;
}
.content-box-gg {
    width: 90%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	padding-bottom: 25px;
	display: block;
}
.content-box-gg-txt {
    width: auto;
    height: auto;        
    display: inline-block;
	margin-left: auto;
	margin-right: 10px;	
	padding-bottom: 10px;
	display: block;
}
.content-box-gg-txt img {
	width: 55px;
	border:none;
	border-radius: 12px;
	margin-top: 10px;
	margin-left: 5px;	
	margin-right: 10px;		
	float: left;
}
.content-box-gg p {
	background: #666666;	
	height: 35px;
    border-radius:10px;    
	color: #fff;.	
	padding-top:5px;	
	font-size: 14px;
	font-family: 'Open Sans', sans-serif;
	float:center;
	text-align: center;	
}
.content-box-gg label {
	color: #000;
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
	float: left;
	text-shadow: none;
}
.content-box-gg label a {
	color: #1da1f2;
}
.content-box-gg-txt-title {
	color: #6A747E;
	font-size: 16px;
	padding-top: 11px;
	padding-bottom: 7px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	text-align: left;	
}
.content-box-gg-txt-det {   
	width: auto;
	height: auto;
	padding-top: 2px;	
	padding-bottom: 3px;
	color: #8799A3;
	font-size: 11px;
	font-family: 'Open Sans', sans-serif;
	text-align: left;
	text-shadow:none;	
}
.alert-gg-failed {                        	    
    background: none;
    width: auto;
	height: 34px;
	padding: 5px;
	padding-top:0px;
	margin-top: -10px;		    
    margin-bottom: 0px;
	position: relative;
	display:none;
	border-radius:5px;
}
.alert-gg {                    
    width: auto;	
	height: auto;		
	padding-top:0px;		
    text-align:left;
    border-radius:5px;
    color: #B3261D;		    
    font-size: 12px;
    float: left;
    font-weight: 400;
    margin-bottom:-10px;   	
	font-family: 'Open Sans', sans-serif;				
}
.alert-gg img {    
    background: #fff;    
    width: 24px; 
    float:left; 
    margin-right:1px;
    margin-left:2px;
    border-radius: 5px;
    margin-top:-5px;
    display: inline-block;	
}
.alert-gg-faileds { 
    background: #62656C;
    width: auto;
	height: auto;
	padding: 5px;	    
    margin-bottom: 10px;
	position: relative;
	display:none;
	border-radius:5px;
}
.alert-ggs {                        
    width: auto;	
	height: auto;		
	padding:0px;		
    text-align:left;
    border-radius:5px;
    color: #fff;		    
    font-size: 13px;
    float:center;
    margin-bottom:-10px;   	
	font-family: 'Open Sans', sans-serif;				
}
.alert-ggs img {    
    background: #fff;    
    width: 24px; 
    float:left;
    margin-right:1px;
    margin-left:2px;
	margin-top: 3px;
    border-radius: 5px;    
    display: inline-block;	
}
.nonbutton {
    background: #0B57CF;
    width: 30%;
    height: auto;
    padding:10px;
	margin-top: -5px;
	margin-left: -1px;
	margin-bottom: 50px;
    padding: 14px;
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    border: none;
    border-radius: 10px;
    outline: none;
    letter-spacing: 1;
    float:right;
}
.content-box-gg-txt-footer {
    width: auto;
    height: auto;        
    display: inline-block;	
	color: #454746;
	font-size:12px;	
    font-family: 'Open Sans', sans-serif;
	margin-right: 10px;			
	text-align:left;
	padding-bottom: 10px;	
	display: block;
}
.content-box-gg-txt-footer a {    
    color: #1A62D1;    
}
.content-box-gg-txt-footers {
    width: auto;
    height: auto;        
    display: inline-block;	
	color: #848586;
	font-size:10.5px;	
    font-family: 'Open Sans', sans-serif;
	margin-right: 10px;	
	text-align:left;
	padding-bottom: 10px;
	display: block;
}
.content-box-gg-txt-footers a {    
    color: #3D86BD;    
}
.content-box-gg-txt-footer-left {
    width: auto;
    height: auto; 
    padding-right:25%;  
    display: inline-block;	
	color: #000;
	font-size:9px;
	font-weight: bold;
    font-family: 'Open Sans', sans-serif;
	margin-right: 10px;	
	text-align:left;
	padding-bottom: 10px;
	display: block;
}
.img {
    width: 55px;        
    float:left;
    display: inline-block;
}
.content-box-gg-txt label {
    color: #90949c;
    font-size: 16px;
    font-family: Roboto, sans-serif;
    text-align: left;
    display: inline-block;
}
.form-group-gg {
	width: 100%;
	max-width: 100%;
	margin-left: -1px;
	margin-right: auto;
	padding: 10px 0;
	position: relative;
	display: block;
}
.form-group-gg input {
	background: transparent;
	width: 100%;
	padding: 16px;
	padding-top: 25px;
	padding-bottom: 5px;
	padding-left: 7px;  
	color: #000;
	font-size: 17px;
	font-family: 'Open Sans', sans-serif;
	border: 1px solid #657786;
	border-radius: 3.5px;
	display: block;
}
.form-group-gg label {
	color: #6E767D;
	font-size: 17px;
	font-weight: 100;
	font-family: 'Open Sans', sans-serif;
	text-align: right;
	top: 0;
	left: 10.5px;
	position: absolute;
	pointer-events: none;
	transform: translateY(26px);
	transition: all 0.2s ease-in-out;
}
.form-group-gg input:valid,.form-group-gg input:focus {
	border: 2px solid #1da1f2;
	outline: none;
}
.form-group-gg input:valid+label,.form-group-gg input:focus+label {
	color: #1da1f2;
	font-size: 12px;
	top: 15px;
	bottom: 20px;
	transform: translateY(0);
}
.form-group-sohi {
	width: 50px;
	height: 73%;
	margin-left: 88%;
	position: absolute;
	z-index: 9999999;
	cursor: pointer;
}
.form-group-sohi img {
	width: 23px;
	opacity: 0.6;
	margin-top: 16px;
}
input {
    background: #fff;
}
#form {
    width: 40vw;
    margin: 0 auto;
    margin-top: 50px;
}
.input-box.active-grey {
    .input-1 {
        border: 1px solid #dadce0;
    }
    .input-label {
        color: #80868b;
        top: -8px;
        background: #fff;
        font-size: 11px;
        transition: 250ms;
        svg {
            position: relative;
            width: 11px;
            height: 11px;
            top: 2px;
            transition: 250ms;
        }
    }
}
.input-box {
    position: relative;
    margin: 10px 0;
    .input-label {
        position: absolute;
        color: #80868b;
        font-size: 16px;
        font-weight: 400;
        max-width: calc(100% - (2 * 8px));
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        left: 8px;
        top: 13px;
        padding: 0 8px;
        transition: 250ms;
        user-select: none;
        pointer-events: none;
        svg {
            position: relative;
            width: 15px;
            height: 15px;
            top: 2px;
            transition: 250ms;
        }
    }
    .input-1 {
        box-sizing: border-box;
        height: 50px;
        width: 100%;
        border-radius: 4px;
        color: #202124;
        border: 1px solid #dadce0;
        padding: 13px 15px;
        transition: 250ms;
        &:focus {
            outline: none;
            border: 2px solid #1a73e8;
            transition: 250ms;
        }
    }
}

.input-box.error {
    .input-label {
        color: #f44336;
        top: -8px;
        background: #fff;
        font-size: 11px;
        transition: 250ms;
    }
    .input-1 {
        border: 2px solid #f44336;
    }
}
.input-box.focus,
.input-box.active {
    .input-label {
        color: #1a73e8;
        top: -8px;
        background: #fff;
        font-size: 11px;
        transition: 250ms;
        svg {
            position: relative;
            width: 11px;
            height: 11px;
            top: 2px;
            transition: 250ms;
        }
    }
}
.input-box.active {
    .input-1 {
        border: 2px solid #1a73e8;
    }
}
.pull-right {
    float: right;
}
.clear {
    clear: both;
}
.btn-forgot-google {
    background: #fff;
    width: auto;
    height: auto;
    margin: 0px;
    margin-top: 15px;
    padding: 10px;
    padding-left: 0;
    color: #1a73e8;
    font-size: 14.5px;
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    letter-spacing: .25px;
    text-align: left;
    border: none;
    outline: none;
    float: left;
}
.notify-google {
    width: 100%;
    height: auto;
    color: gray;
    font-size: 14px;
    font-family: arial, sans-serif;
    font-weight: normal;
    text-align: left;
    margin-top: 15%;
    margin-bottom: 5%;
}
.notify-google span {
    color: #1a73e8;
    font-weight: inherit;
}
.btn-create-google {
    background: #fff;
    width: auto;
    height: auto;
    margin: 0px;
    padding: 5px;
    padding-left: 0;
    color: #1a73e8;
    font-size: 14.5px;
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    letter-spacing: .25px;
    text-align: left;
    border: none;
    outline: none;
    float: left;
}
.btn-login-google {
    background: #1a73e8;
    width: 30%;
    height: auto;
    margin: 0px;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    letter-spacing: .25px;
    text-align: center;
    border: none;
    border-radius: 5px;
    outline: none;
    float: right;
    margin-top: -8px;
}
@media only screen and (max-width:600px) {
    .footer-language-google,
    .footer-menu-google {
        margin-top: 70%;
    }
    .footer-language-account-google,
    .footer-menu-account-google {
        margin-top: 90%;
    }
}
?>