<?php
include 'conexao.php';

$contMM=0;$contMF=0;
$taxaMM=0;$taxaMF=0;
$contPM=0;$contPF=0;
$taxaPM=0;$taxaPF=0;
$contFM=0;$contFF=0;
$taxaFM=0;$taxaFF=0;
$contTM=0;$contTF=0;
$taxaTM=0;$taxaTF=0;
$contSM=0;$contSF=0;
$taxaSM=0;$taxaSF=0;
$contHM=0;$contHF=0;
$taxaHM=0;$taxaHF=0;
$contTotM=0;$contTotF=0;


while ($contagem= mysql_fetch_assoc($ver))
    {
if ($contagem['doenca']=='Diabete'){
    if ($contagem['genero']=='Masculino') {
     $contMM++;}}

if ($contagem['doenca']=='Diabete'){
    if ($contagem['genero']=='Femenino') {
     $contMF++;}} 


if ($contagem['doenca']=='Paludismo'){
    if ($contagem['genero']=='Masculino') {
     $contPM++;}}

if ($contagem['doenca']=='Paludismo'){
    if ($contagem['genero']=='Femenino') {
     $contPF++;}} 


if ($contagem['doenca']=='Febre-Tifoíde'){
    if ($contagem['genero']=='Masculino') {
     $contFM++;}}

if ($contagem['doenca']=='Febre-Tifoíde'){
    if ($contagem['genero']=='Femenino') {
     $contFF++;}}     
     
if ($contagem['doenca']=='Tuberculose'){
    if ($contagem['genero']=='Masculino') {
     $contTM++;}}

if ($contagem['doenca']=='Tuberculose'){
    if ($contagem['genero']=='Femenino') {
     $contTF++;}} 
   

if ($contagem['doenca']=='HIV/Sida'){
    if ($contagem['genero']=='Masculino') {
     $contSM++;}}

if ($contagem['doenca']=='HIV/Sida'){
    if ($contagem['genero']=='Femenino') {
     $contSF++;}} 

if ($contagem['doenca']=='Anemia'){
    if ($contagem['genero']=='Masculino') {
     $contHM++;}}

if ($contagem['doenca']=='Anemia'){
    if ($contagem['genero']=='Femenino') {
     $contHF++;}}
 } 

//iiaedxxxxxxxxxxxxxxxxxxxxxx
$die_MM=0;$die_MF=0;
$taxaMM=0;$taxaMF=0;
$die_PM=0;$die_PF=0;
$taxaPM=0;$taxaPF=0;
$die_FM=0;$die_FF=0;
$taxaFM=0;$taxaFF=0;
$die_TM=0;$die_TF=0;
$taxaTM=0;$taxaTF=0;
$die_SM=0;$die_SF=0;
$taxaSM=0;$taxaSF=0;
$die_HM=0;$die_HF=0;
$taxaHM=0;$taxaHF=0;
$contTotM=0;$contTotF=0;


while ($contagemM= mysql_fetch_array($malogrados))
    {
if ($contagemM['doenca']=='Diabete'){
    if ($contagemM['genero']=='Masculino') {
     $die_MM++;}}

if ($contagemM['doenca']=='Diabete'){
    if ($contagemM['genero']=='Femenino') {
     $die_MF++;}} 


if ($contagemM['doenca']=='Paludismo'){
    if ($contagemM['genero']=='Masculino') {
     $die_PM++;}}

if ($contagemM['doenca']=='Paludismo'){
    if ($contagemM['genero']=='Femenino') {
     $die_PF++;}} 


if ($contagemM['doenca']=='Febre-Tifoíde'){
    if ($contagemM['genero']=='Masculino') {
     $die_FM++;}}

if ($contagemM['doenca']=='Febre-Tifoíde'){
    if ($contagemM['genero']=='Femenino') {
     $die_FF++;}}     
     
if ($contagemM['doenca']=='Tuberculose'){
    if ($contagemM['genero']=='Masculino') {
     $die_TM++;}}

if ($contagemM['doenca']=='Tuberculose'){
    if ($contagemM['genero']=='Femenino') {
     $die_TF++;}} 
   

if ($contagemM['doenca']=='HIV/Sida'){
    if ($contagemM['genero']=='Masculino') {
     $die_SM++;}}

if ($contagemM['doenca']=='HIV/Sida'){
    if ($contagemM['genero']=='Femenino') {
     $die_SF++;}} 

if ($contagemM['doenca']=='Anemia'){
    if ($contagemM['genero']=='Masculino') {
     $die_HM++;}}

if ($contagemM['doenca']=='Anemia'){
    if ($contagemM['genero']=='Femenino') {
     $die_HF++;}}
 } 



?>