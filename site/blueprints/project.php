<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
files: true
fields:
  title:
    label: Project Title
    type:  text
    width: 1/2
  urlname:
    label: Project URL name
    type: text
    width: 1/4
  theurl:
    label: Project URL (with http)
    type: text
    width: 1/4
  text:
    label: Project Description
    type:  textarea
  key:
    label: Project Main Themes
    type: text
  featured:
    label: Featured?
    type: checkbox
  dev:
    label: In development?
    type: checkbox
    width: 1/5
  macmac:
    label: built at macmac?
    type: checkbox
    width: 1/5