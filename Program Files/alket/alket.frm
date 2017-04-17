VERSION 5.00
Object = "{6B7E6392-850A-101B-AFC0-4210102A8DA7}#1.3#0"; "COMCTL32.OCX"
Begin VB.Form frAlket 
   Caption         =   "Alket"
   ClientHeight    =   5790
   ClientLeft      =   165
   ClientTop       =   510
   ClientWidth     =   10395
   LinkTopic       =   "Form1"
   ScaleHeight     =   5790
   ScaleWidth      =   10395
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton cmCari 
      Caption         =   "Cari"
      Height          =   375
      Left            =   5880
      TabIndex        =   2
      Top             =   600
      Width           =   1095
   End
   Begin VB.TextBox tbInput 
      Height          =   405
      Left            =   3600
      TabIndex        =   1
      Text            =   "Text1"
      Top             =   600
      Width           =   2055
   End
   Begin ComctlLib.ListView ListView1 
      Height          =   4095
      Left            =   120
      TabIndex        =   0
      Top             =   1560
      Width           =   10095
      _ExtentX        =   17806
      _ExtentY        =   7223
      LabelWrap       =   -1  'True
      HideSelection   =   -1  'True
      _Version        =   327682
      ForeColor       =   -2147483640
      BackColor       =   -2147483643
      BorderStyle     =   1
      Appearance      =   1
      NumItems        =   0
   End
   Begin VB.Label Label1 
      Caption         =   "nama"
      Height          =   255
      Left            =   1440
      TabIndex        =   3
      Top             =   720
      Width           =   1935
   End
End
Attribute VB_Name = "frAlket"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
