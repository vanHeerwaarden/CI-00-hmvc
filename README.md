CI-00-hmvc
==========

dc series

Codeigniter HMVC installatie:

1]   Schone Codeigniter installatie uitgevoerd

2]   De $config ['base_url'] correct ingesteld

3]   Check uitgevoerd -> de URL/index.php/welcome => toont de    
     Welkom boodschap van CodeIgniter
     
4]   Codeigniter is als HMVC applicatie te gebruiken met Modular eXtentions
     (MX).  MX hebben we geplaatst in de application/third_party folder. 
     
5]   De core-bestanden van Modulaire eXtensies in de map 
     application/core geplaatst.
     
6]   De URL/index.php/welcome => toont weer Welkom bij CodeIgniter

7]   De module directory-structuur aangemaakt: 
     application/modules/welcome/controllers
     
8]   De controller application/controllers/welkom.php verplaatst naar 
     application/modules/welcome/controllers/welkom.php
     
9]   De URL/index.php/welcome => toont de Welkom bij CodeIgniter volgens de 
     HMVC systematiek
     
10]  Nu de map application/modules/welcome/views aangemaakt

11]  De welkomboodschap verplaatst van 
     application/views/welcome_message.php naar 
     application/modules/welcome/views/welcome_message.php
     
12]  Toegang tot de URL/index.php/welcome => toont Welkom bij CodeIgniter



We hebben een werkende Modular eXtensions installatie.

