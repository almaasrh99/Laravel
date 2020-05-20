<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'nama_barang' => "Macbook Pro",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 28000000,
            'harga_jual' => 30000000,
            'stok' => 80,
            'warna' => "hitam",
            'spesifikasi' => "Touch Bar dengan sensor Touch ID terintegrasi.Layar 13,3 inci (diagonal) dengan lampu latar LED dan teknologi IPS; resolusi 2560 x 1600 pada 227 piksel per inci dengan dukungan untuk jutaan warna.Skala resolusi yang didukung:
            1680 x 1050

            1440 x 900

            1024 x 640

            Kecerahan 500 nit

            Warna luas (P3)

            Teknologi True Tone.Intel Core i5 quad-core 1,4 GHz, Turbo Boost hingga 3,9 GHz, dengan eDRAM sebesar 128 MB.SSD 128 GB.Memori terpasang LPDDR3 2133 MHz sebesar 8 GB.",
            'foto' => "/assets/produk/macbook.jpg",
            'kategori_id' => 1,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Lenovo Y530",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 9000000,
            'harga_jual' => 10000000,
            'stok' => 92,
            'warna' => "hitam",
            'spesifikasi' => "Lenovo Legion Y530 Gaming

                - Processor : 8th Generation Intel® Core™ i7-8750H Processor 4.50 GHz with Turbo Boost
                - Memory : 16 GB DDR4 2666 MHz Super Speed Up To 32 GB
                - Graphic : NVIDIA® GeForce® GTX 1050 ti 4 GB GDDR5X DEDICATED VRAM
                - Storage : 256 GB M.2 SSD + 1 TB HDD + FireCuda 8 GB Cache
                - Display : 15.6” FHD IPS Anti-Glare 72% color gamut 300 nits
                - Connectivity : 3 x USB 3.1, Mini DisplayPort™ 1.4, HDMI™ 2.0, 1 x USB 3.1 Gen 2 Type-C / Intel Thunderbolt 3, Bluetooth 4.2, Gigabyte Ethernet Mps, RJ45 Ethernet, Kensington Wedge Lock Out, NOVO hole
                - Audio : Harman® speakers with Dolby Atmos® for Gaming
                OS : Windows 10 Original.",
            'foto' => "/assets/produk/lenovo2a.jpg",
            'kategori_id' => 1,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "ASUS ExpertBook",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 12000000,
            'harga_jual' => 13000000,
            'stok' => 3,
            'warna' => "hitam",
            'spesifikasi' => "Processor : Intel Core i7 8565U Processor
                RAM : 8GB DDR4 Memory
                Storage : 1TB SATA HDD
                Graphics : Nvidia Geforce MX110 2GB VRAM
                Display : 14 Inch LED backlit HD (1366x768)
                OS : Windows 10 Home Original.",
            'foto' => "/assets/produk/asus1a.jpg",
            'kategori_id' => 1,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "ASUS ZenBook",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 12000000,
            'harga_jual' => 13000000,
            'stok' => 12,
            'warna' => "hitam",
            'spesifikasi' => "Deskripsi Asus Zenbook Flip UX362FA EL501T EL502T x360
                Royal Blue dan grey
                Spesifikasi:
                Intel Core i5-8265U 1.6GHz (Turbo up to 3.9GHz)
                Memory:8GB
                Os: Windows 10 (64bit)
                13.3” LED-backlit FHD (1920 x 1080) touchscreen ; 3.5mm-thin bezel with 90% screen-to-body ratio ; Wide 100% sRGB color gamut ; 178° wide-view technology
                Storage:512SSD
                * Wireless Data Network :
                - 802.11AC
                - Bluetooth 5.0
                * Webcam : HD IR/RGB Combo Camera
                * Ports :
                - 1x Headphone-out & Audio-in Combo Jack
                - 1x HDMI
                - 1x USB 2.0
                - 1x USB3.1 Type A (Gen1)
                - 1x USB3.1 Type C (Gen 2)
                - 1x Micro SD Card Reader
                * Battery : 50WHrs, 3S1P, 3-cell Li-ion
                Ada stylush.",
            'foto' => "/assets/produk/asus2a.jpg",
            'kategori_id' => 1,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Samsung-A20",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 8000000,
            'harga_jual' => 9000000,
            'stok' => 12,
            'warna' => "hitam",
            'spesifikasi' => "NETWORK	Technology
                GSM / HSPA / LTE
                LAUNCH	Announced	2019, September
                Status	Coming soon. Exp. release 2019, October
                BODY	Dimensions	163.3 x 77.5 x 8 mm (6.43 x 3.05 x 0.31 in)
                Weight	183 g (6.46 oz)
                SIM	Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                DISPLAY	Type	IPS LCD capacitive touchscreen, 16M colors
                Size	6.5 inches, 103.7 cm2 (~81.9% screen-to-body ratio)
                Resolution	720 x 1560 pixels, 19.5:9 ratio (~264 ppi density)
                PLATFORM	OS	Android 9.0 (Pie)
                Chipset	Qualcomm SDM450 Snapdragon 450 (14 nm)
                CPU	Octa-core 1.8 GHz Cortex-A53
                GPU	Adreno 506
                MEMORY	Card slot	microSD, up to 1 TB (dedicated slot)
                Internal	32GB 3GB RAM
                MAIN CAMERA	Triple	13 MP, f/1.8, 27mm (wide), PDAF
                8 MP, f/2.2, 13mm (ultrawide)
                5 MP, f/2.2, depth sensor
                Features	LED flash, panorama, HDR
                Video	1080p@30fps
                SELFIE CAMERA	Single	8 MP, f/2.0
                Video
                SOUND	Loudspeaker	Yes
                3.5mm jack	Yes
                    Active noise cancellation with dedicated mic
                COMMS	WLAN	Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot
                Bluetooth	4.2, A2DP, LE
                GPS	Yes, with A-GPS, GLONASS, GALILEO, BDS
                Radio	FM radio
                USB	Type-C 1.0 reversible connector
                FEATURES	Sensors	Fingerprint (rear-mounted), accelerometer, gyro, proximity, compass
                BATTERY	 	Non-removable Li-Po 4000 mAh battery
                Charging	Fast battery charging 15W.",
            'foto' => "/assets/produk/samsung1.png",
            'kategori_id' => 2,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Samsung-S20",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 12000000,
            'harga_jual' => 13000000,
            'stok' => 5,
            'warna' => "hitam",
            'spesifikasi' => "Jumlah Slot :  Dual SIM Hybrid
                Memory  :  Octa-Core 2.73GHz  2.6GHz  2GHz + 8GB RAM 128GB ROM
                Type Display  :  Dynamic AMOLED QHD+ (3200x1440)
                Ukuran Display  : Main 6.2\"\"
                Tipe Input  :  Touchscreen
                Jaringan Data  : Enhanced 2X2 MIMO  6CA  LAA  LTE Cat.18
                Kemampuan Pesan  : SMS(threaded view)  MMS  Email  Push Mail  IM
                Infra Red (if any) :  -
                Spesifikasi Bluetooth  : Bluetooth v5.0
                Spesifikasi Wireless LAN :  802.11 a/b/g/n/ac/ax 2.4G+5GHz  HE80 MIMO 1024-QAM
                Kamera  : \"\" Rear 12MP (f2.2) + 12MP (f1.8) + 64MP (f2.0)
                 Front 10MP (f2.2)\"\"
                Video Recorder : 8K (7680 x 4320) | @24fps
                Multimedia : MP3 M4A 3GA AAC OGG OGA WAV WMA AMR AWB FLAC MID MIDI XMF MXMF IMY RTTTL RTX OTA DFF DSF APE : MP4 M4V 3GP 3G2 WMV ASF AVI FLV MKV WEBM
                Baterai :  4 000 mAh
                Sistem Operasi  : Android OS 10
                USB :  Type-C (USB 3.1)
                Dimensi (P x L x T)  : 151.7 x 69.1 x 7.9 mm
                Berat : 163 g.",
            'foto' => "/assets/produk/samsung2.png",
            'kategori_id' => 2,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Samsung-A51",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 6000000,
            'harga_jual' => 7000000,
            'stok' => 5,
            'warna' => "hitam",
            'spesifikasi' => "Spesifikasi Fisik
                Dimension (HxWxD, mm)
                158.5 x 73.6 x 7.9

                Display
                Size (Main_Display)
                164.0mm (6.5\" full rectangle)
                Resolusi (Main Display)
                1080 x 2400 (FHD+)
                Teknologi (Main Display)
                Super AMOLED

                Prosesor : Exynos 9611
                CPU Speed : 2.3GHz, 1.7GHz
                CPU Type : Octa-Core

                Memori
                RAM Size : 6GB
                ROM Size : 128GB
                MicroSD (Up to 512GB)

                Kamera
                Rear Camera - Resolution (Multiple)
                48.0 MP + 12.0 MP + 5.0 MP + 5.0 MP
                Front Camera - Resolution
                32.0 MP
                Rear Camera Zoom
                Digital Zoom up to 8x

                Number of SIM
                Dual-SIM
                SIM size
                Nano-SIM (4FF)

                NFC : Yes
                USB : USB Type-C

                Sistem Operasi
                Android 10

                Baterai
                4000 mAh.",
            'foto' => "/assets/produk/samsung3.png",
            'kategori_id' => 2,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Samsung-A80",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 9000000,
            'harga_jual' => 10000000,
            'stok' => 12,
            'warna' => "hitam",
            'spesifikasi' => "Jaringan	GSM / HSPA / LTE
                Sistem Operasi	Android 9 (Pie)
                Prosesor Qualcomm SDM730 Snapdragon 730 (8 nm) Octa-core (2x2.2 GHz Kryo 470 Gold & 6x1.8 GHz Kryo 470 Silver)

                GPU Adreno 618
                RAM 8 GB
                ROM 128 GB

                Ukuran Layar	6.7 inch
                Tipe Layar	Super AMOLED capacitive touchscreen, 16M colors
                Resolusi Layar	1080 x 2400 pixels, 20:9 ratio (~393 ppi density)
                Kamera Belakang
                Triple
                48 MP, f/2.0, 26mm (wide), 1/2\", 0.8µm, PDAF
                8 MP, f/2.2, 12mm (ultrawide), 1.12µm
                TOF 3D camera, f/1.2, 30mm

                Kamera Depan Triple, Motorized pop-up rotating main camera module
                Fitur Kamera	LED flash, panorama, HDR
                Audio
                Active noise cancellation with dedicated mic
                Dolby Atmos sound

                WLAN	Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot
                Bluetooth	5.0, A2DP, LE
                GPS	Yes, with A-GPS, GLONASS, GALILEO, BDS
                Sensor	Fingerprint (under display), accelerometer, gyro, proximity, compass, ANT+
                Baterai	3700 mAh
                Pengisian Daya	Fast battery charging 25W, 2.0, Type-C 1.0 reversible connector
                Slot Memori Eksternal	No
                Sim Card	Dual Nano SIM
                Berat	220 g
                Dimensi	165.2 x 76.5 x 9.3 mm
                Lainnya	FM radio.",
            'foto' => "/assets/produk/a80.png",
            'kategori_id' => 2,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Headphone Over Ear BT-008",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 55000,
            'harga_jual' => 60000,
            'stok' => 12,
            'warna' => "merah",
            'spesifikasi' => "Headphone untuk menemani Anda ketika mendengarkan musik favofit. , Suara Yang Powerfull dan Jernih, Bits Sport Beat Headphone Over Ear BT-008.",
            'foto' => "/assets/produk/samsung1.png",
            'kategori_id' => 3,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Mouse Gaming T-Wolvf V-1",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 30000,
            'harga_jual' => 35000,
            'stok' => 12,
            'warna' => "hitam",
            'spesifikasi' => "- panjang kabel 1.2m
                - the light of the field, the cursor accurate
                - with 3 digit across the ability
                - resolution 1200 cpi
                - frame rate 4000 franes/sec
                - rated voltage 5v
                - rate current 500ma
                - track finding systems optical
                - the maximum speed 24 inches/sec.",
            'foto' => "/assets/produk/mouse1.png",
            'kategori_id' => 3,

        ]);

        DB::table('produk')->insert([
            'nama_barang' => "Ipega Gamepad",
            'tgl_masuk' => \Carbon\Carbon::now(),
            'harga' => 200000,
            'harga_jual' => 210000,
            'stok' => 20,
            'warna' => "merah",
            'spesifikasi' => "1. Model:PG-9087
                2. BT:3.0
                3. Mengendalikan jarak:6 ~ 8M
                4. Telescopic stand: Dukungan 5 ~ 10 \"perangkat
                5. Tegangan kerja: DC3.7V
                6. Bekerja saat ini:30mA
                7. Masukan: DC5V500mA.",
            'foto' => "/assets/produk/ipega.jpg",
            'kategori_id' => 3,

        ]);
    }
}
