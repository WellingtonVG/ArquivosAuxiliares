﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;
using ZXing.Net.Mobile.Forms;

namespace Barcode_QR
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }
        private async void bt_scan (object sender, EventArgs args)
        {
            var scan = new ZXingScannerPage( );
            await Navigation.PushAsync( scan );
            scan.OnScanResult += (result) =>
            {
                Device.BeginInvokeOnMainThread(async ( ) =>
                {
                    await Navigation.PopAsync( );
                    mycode.Text = result.Text;
                });
            };
        }
    }
}
