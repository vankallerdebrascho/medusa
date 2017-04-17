VERSION 5.00
Object = "{6B7E6392-850A-101B-AFC0-4210102A8DA7}#1.3#0"; "COMCTL32.OCX"
Begin VB.Form Form1 
   Caption         =   "Form1"
   ClientHeight    =   6465
   ClientLeft      =   60
   ClientTop       =   405
   ClientWidth     =   7290
   LinkTopic       =   "Form1"
   ScaleHeight     =   6465
   ScaleWidth      =   7290
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command1 
      Caption         =   "Command1"
      Height          =   615
      Left            =   3720
      TabIndex        =   11
      Top             =   5400
      Width           =   2055
   End
   Begin VB.Frame Frame1 
      Caption         =   "Frame1"
      Height          =   495
      Left            =   3840
      TabIndex        =   10
      Top             =   4560
      Width           =   1815
   End
   Begin VB.TextBox Text1 
      Height          =   375
      Left            =   3720
      TabIndex        =   9
      Text            =   "Text1"
      Top             =   3960
      Width           =   1815
   End
   Begin VB.PictureBox Picture1 
      Height          =   975
      Left            =   3600
      ScaleHeight     =   915
      ScaleWidth      =   3075
      TabIndex        =   7
      Top             =   1920
      Width           =   3135
   End
   Begin ComctlLib.Slider Slider1 
      Height          =   255
      Left            =   480
      TabIndex        =   6
      Top             =   5520
      Width           =   2415
      _ExtentX        =   4260
      _ExtentY        =   450
      _Version        =   327682
   End
   Begin ComctlLib.TreeView TreeView1 
      Height          =   1815
      Left            =   480
      TabIndex        =   5
      Top             =   3480
      Width           =   2295
      _ExtentX        =   4048
      _ExtentY        =   3201
      _Version        =   327682
      Style           =   7
      Appearance      =   1
   End
   Begin ComctlLib.ProgressBar ProgressBar1 
      Height          =   255
      Left            =   480
      TabIndex        =   4
      Top             =   3000
      Width           =   2655
      _ExtentX        =   4683
      _ExtentY        =   450
      _Version        =   327682
      Appearance      =   1
   End
   Begin VB.ListBox List1 
      Height          =   645
      Left            =   480
      TabIndex        =   3
      Top             =   1800
      Width           =   2175
   End
   Begin VB.ComboBox Combo1 
      Height          =   315
      Left            =   480
      TabIndex        =   2
      Text            =   "Combo1"
      Top             =   1320
      Width           =   2295
   End
   Begin VB.OptionButton Option1 
      Caption         =   "Option1"
      Height          =   375
      Left            =   480
      TabIndex        =   1
      Top             =   720
      Width           =   2295
   End
   Begin VB.CheckBox Check1 
      Caption         =   "Check1"
      Height          =   375
      Left            =   480
      TabIndex        =   0
      Top             =   240
      Width           =   2055
   End
   Begin VB.Label Label1 
      Caption         =   "Label1"
      Height          =   495
      Left            =   3720
      TabIndex        =   8
      Top             =   3120
      Width           =   1695
   End
   Begin VB.Shape Shape1 
      BackColor       =   &H0000FF00&
      BackStyle       =   1  'Opaque
      BorderStyle     =   0  'Transparent
      Height          =   1215
      Left            =   3720
      Top             =   360
      Width           =   2895
   End
   Begin VB.Line Line1 
      X1              =   480
      X2              =   2880
      Y1              =   2640
      Y2              =   2640
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
