VERSION 5.00
Object = "{6B7E6392-850A-101B-AFC0-4210102A8DA7}#1.3#0"; "COMCTL32.OCX"
Begin VB.Form Form1 
   Caption         =   "Form1"
   ClientHeight    =   4605
   ClientLeft      =   60
   ClientTop       =   405
   ClientWidth     =   9855
   LinkTopic       =   "Form1"
   ScaleHeight     =   4605
   ScaleWidth      =   9855
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command1 
      Caption         =   "Command1"
      Height          =   375
      Left            =   7560
      TabIndex        =   11
      Top             =   1560
      Width           =   1095
   End
   Begin VB.Frame Frame1 
      Caption         =   "Frame1"
      Height          =   1935
      Left            =   6120
      TabIndex        =   10
      Top             =   2160
      Width           =   3255
   End
   Begin VB.TextBox Text1 
      Height          =   375
      Left            =   3360
      TabIndex        =   9
      Text            =   "Text1"
      Top             =   1560
      Width           =   1815
   End
   Begin VB.PictureBox Picture1 
      Height          =   855
      Left            =   3360
      ScaleHeight     =   795
      ScaleWidth      =   3075
      TabIndex        =   7
      Top             =   240
      Width           =   3135
   End
   Begin ComctlLib.Slider Slider1 
      Height          =   255
      Left            =   3240
      TabIndex        =   6
      Top             =   2280
      Width           =   2415
      _ExtentX        =   4260
      _ExtentY        =   450
      _Version        =   327682
   End
   Begin ComctlLib.TreeView TreeView1 
      Height          =   1815
      Left            =   480
      TabIndex        =   5
      Top             =   2160
      Width           =   2295
      _ExtentX        =   4048
      _ExtentY        =   3201
      _Version        =   327682
      Style           =   7
      Appearance      =   1
   End
   Begin ComctlLib.ProgressBar ProgressBar1 
      Height          =   255
      Left            =   3240
      TabIndex        =   4
      Top             =   2760
      Width           =   2415
      _ExtentX        =   4260
      _ExtentY        =   450
      _Version        =   327682
      Appearance      =   1
   End
   Begin VB.ListBox List1 
      Height          =   840
      Left            =   240
      TabIndex        =   3
      Top             =   240
      Width           =   3015
   End
   Begin VB.ComboBox Combo1 
      Height          =   315
      Left            =   960
      TabIndex        =   2
      Text            =   "Combo1"
      Top             =   1560
      Width           =   2295
   End
   Begin VB.OptionButton Option1 
      Caption         =   "Option1"
      Height          =   375
      Left            =   6480
      TabIndex        =   1
      Top             =   1560
      Width           =   975
   End
   Begin VB.CheckBox Check1 
      Caption         =   "Check1"
      Height          =   375
      Left            =   5280
      TabIndex        =   0
      Top             =   1560
      Width           =   1095
   End
   Begin VB.Label Label1 
      Caption         =   "Label1"
      Height          =   255
      Left            =   120
      TabIndex        =   8
      Top             =   1560
      Width           =   735
   End
   Begin VB.Shape Shape1 
      BackColor       =   &H0000FF00&
      BackStyle       =   1  'Opaque
      BorderStyle     =   0  'Transparent
      Height          =   855
      Left            =   6600
      Top             =   240
      Width           =   2895
   End
   Begin VB.Line Line1 
      X1              =   240
      X2              =   9480
      Y1              =   1320
      Y2              =   1320
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
