<?php
 goto p_t3e; KWSp3: $nomor_pendaftaran = $row["\156\x6f\155\157\162\x5f\160\145\156\x64\141\146\x74\x61\x72\141\156"]; goto D2Tmr; rAmOf: $tahun_selanjutnya = $tahun_sekarang + 1; goto xniv3; FqRy8: $html = ob_get_contents(); goto a0liG; BMviH: require_once "\146\x75\x6e\143\164\x69\157\156\57\146\165\156\x63\x74\x69\x6f\156\x2e\165\x73\x65\162\x2e\x70\x68\160"; goto JEVqy; Kw4Km: $mpdf->Output($dokumen . "\56\160\x64\146", "\x49"); goto bGYw7; gfyjb: $tahun_sekarang = date("\131"); goto rAmOf; tLnxX: $jadwal->free_result(); goto gfyjb; t6oDL: require_once "\146\x75\156\143\164\x69\x6f\x6e\57\146\165\x6e\143\x74\x69\157\156\56\x73\145\163\163\x69\x6f\156\x2e\160\x68\160"; goto O8XCB; kgWj6: $jadwal_test = $jadwal->fetch_array(); goto rbsB7; IxS5D: $foto = $row["\x66\x6f\164\157"]; goto UcUNA; y81Dv: GlobalDataSitus(); goto eKCUY; D2Tmr: $nama = $row["\x6e\141\155\141"]; goto IZZ0Z; lLFJt: $nama_sekolah = $row["\x6e\141\x6d\141\137\163\145\x6b\x6f\x6c\141\x68"]; goto IxS5D; N8pfR: $status_pendaftaran = $row["\x73\x74\x61\164\x75\x73\137\160\x65\x6e\144\141\146\x74\x61\162\141\x6e"]; goto AjvA6; p_t3e: session_start(); goto t6oDL; IZZ0Z: $asal_sekolah = $row["\141\163\141\x6c\137\x73\x65\153\x6f\154\x61\x68"]; goto lLFJt; JEVqy: require_once "\160\154\165\147\151\x6e\x73\x2f\155\x70\x64\x66\x2f\x6d\160\144\x66\x2e\160\x68\160"; goto nsxOY; LUXtd: $mpdf->WriteHTML($stylesheet, 1); goto qDJu6; O8XCB: require_once "\143\157\x6e\x66\151\x67\57\144\141\164\x61\x62\141\163\x65\56\x70\x68\x70"; goto BMviH; xeauL: ob_start(); goto FR1lm; UcUNA: $jalur_pendaftaran = $row["\152\141\154\x75\x72\x5f\x70\x65\156\144\141\x66\x74\141\x72\x61\156"]; goto N8pfR; teAMU: $jadwal = Tampil_JadwalTest(); goto kgWj6; Fkehb: $materi = $jadwal_test["\x6d\x61\164\145\162\151"]; goto tLnxX; ASAaF: $dokumen = "\106\117\x52\x4d\125\114\111\122\x20\120\x45\116\104\101\106\124\x41\x52\x41\116"; goto X60zP; AjvA6: $DataMhs->free_result(); goto teAMU; FR1lm: $DataMhs = DataSiswa($id); goto YkuaR; xniv3: if ($status_pendaftaran != "\x54\x65\162\x76\x65\x72\x69\x66\151\153\141\163\151") { echo "\74\x6d\x65\164\141\40\150\x74\164\160\x2d\145\x71\165\x69\x76\x3d\x22\162\145\146\x72\145\x73\x68\42\143\157\x6e\x74\x65\156\x74\75\x22\x33\73\x55\122\114\75\x68\157\x6d\145\x22\57\x3e"; die("\105\x72\162\x6f\162\x20\x3a\x20\x41\156\144\x61\x20\142\x65\154\x75\155\40\164\145\x72\x76\145\162\151\146\151\153\x61\x73\x69\54\40\142\145\x6c\165\155\40\142\151\x73\141\40\x63\145\x74\x61\x6b\x20\153\x61\162\x74\165\40\x70\x65\163\145\x72\164\141"); die(0); } goto sE0oG; nsxOY: if (SessionUserCek()) { header("\x6c\x6f\x63\x61\164\x69\157\156\x3a\x6c\x6f\x67\x69\x6e"); } else { SessionActive(); $id = $DSessionArray[0]; $nama_akun = $DSessionArray[1]; $email = $DSessionArray[2]; $username = $DSessionArray[3]; } goto ASAaF; qDJu6: $mpdf->WriteHTML(utf8_encode($html)); goto Kw4Km; X60zP: $mpdf = new mPDF("\165\x74\146\x2d\x38", "\101\x34"); goto xeauL; DphBA: if (empty($tanggal_lahir)) { $tgl = NULL; } else { $tgl = explode("\x2d", $tanggal_lahir); } goto y81Dv; yct3U: $waktu_test = $jadwal_test["\x77\x61\153\x74\165\x5f\x74\145\163\164"]; goto Fkehb; UQmfR: $id = $row["\151\x64"]; goto KWSp3; rbsB7: $tanggal_test = $jadwal_test["\x74\141\156\147\x67\x61\x6c\137\164\x65\x73\164"]; goto yct3U; bGYw7: die; goto Jy927; a0liG: ob_end_clean(); goto LUXtd; sE0oG: if (empty($nomor_pendaftaran)) { echo "\x3c\x6d\x65\164\141\40\150\x74\x74\160\x2d\x65\161\x75\151\x76\x3d\x22\162\x65\x66\x72\145\x73\x68\42\x63\157\x6e\164\x65\156\164\x3d\42\63\73\x55\122\114\x3d\x68\157\x6d\145\42\57\x3e"; die("\x53\151\x6c\x61\150\x6b\141\156\40\151\x73\x69\40\144\x61\156\40\x6c\x65\156\147\153\x61\x70\40\x64\141\164\141\40\x70\162\151\142\141\144\151\40\x74\x65\162\154\145\142\x69\150\x20\144\141\150\x75\x6c\x75"); die(0); } goto DphBA; YkuaR: $row = $DataMhs->fetch_array(); goto UQmfR; eKCUY: echo "\xa\xa\x3c\x68\164\x6d\x6c\x3e\12\74\x68\145\141\144\x3e\x3c\155\x65\164\141\x20\150\164\x74\160\x2d\x65\x71\165\x69\x76\x3d\42\x43\x6f\156\164\145\x6e\x74\55\x54\x79\160\x65\x22\x20\143\157\156\164\x65\156\164\75\x22\164\x65\170\164\57\150\x74\x6d\x6c\73\x20\x63\150\x61\x72\163\145\x74\x3d\x75\164\146\x2d\x38\x22\x3e\x20\12\74\163\x74\x79\x6c\145\76\12\x20\x20\142\157\144\x79\40\173\x66\157\x6e\x74\x2d\x66\141\x6d\151\154\171\x3a\x20\x73\141\x6e\163\x2d\163\145\x72\x69\x66\73\xa\x20\40\x20\40\146\x6f\156\x74\x2d\163\x69\172\145\72\40\x39\x70\164\x3b\xa\40\x20\x20\x20\142\x61\143\153\147\x72\157\165\x6e\144\x3a\x20\x74\162\x61\156\x73\160\x61\x72\x65\156\164\x20\165\x72\154\x28\47\x62\x67\x62\x61\162\143\x6f\x64\145\x2e\160\156\147\47\x29\40\x72\x65\160\x65\x61\164\55\x79\x20\x73\143\162\x6f\x6c\x6c\40\x6c\145\146\164\x20\x74\x6f\x70\x3b\12\x20\40\175\12\12\x20\40\150\65\54\40\x70\40\x7b\x20\155\x61\x72\147\151\x6e\72\x20\x30\160\164\73\xa\x20\x20\x7d\12\40\x20\x74\x61\142\154\145\x2e\151\164\x65\x6d\163\40\x7b\xa\x20\40\40\x20\146\157\156\164\x2d\163\x69\172\145\72\40\71\x70\x74\x3b\x20\xa\40\40\x20\40\142\157\x72\144\145\x72\x2d\x63\157\x6c\x6c\141\160\163\x65\x3a\x20\x63\157\154\x6c\141\160\x73\x65\73\12\x20\x20\40\x20\12\40\x20\175\xa\x20\40\x74\144\x20\173\40\x76\145\162\164\151\143\x61\154\55\141\x6c\151\147\x6e\72\40\x74\x6f\160\73\x20\12\40\40\x7d\12\40\x20\164\x61\142\154\x65\40\x74\150\x65\141\144\x20\164\144\40\173\40\142\x61\143\x6b\x67\x72\157\x75\156\x64\x2d\143\157\x6c\x6f\162\x3a\x20\x23\105\105\105\105\x45\x45\x3b\12\40\x20\40\40\164\x65\170\x74\55\141\x6c\x69\147\x6e\x3a\x20\143\145\156\x74\x65\162\73\xa\40\x20\x7d\xa\x20\40\164\x61\142\154\x65\40\164\146\x6f\x6f\164\x20\x74\x64\x20\173\40\142\x61\143\x6b\x67\x72\x6f\x75\156\x64\x2d\143\157\154\x6f\x72\72\x20\43\x41\101\x46\x46\105\x45\x3b\xa\40\40\40\x20\164\x65\170\164\x2d\141\x6c\x69\x67\156\72\40\143\x65\156\x74\145\162\73\xa\40\40\175\xa\x20\40\56\142\x61\162\x63\x6f\144\x65\x20\x7b\xa\40\x20\40\40\x70\x61\x64\x64\x69\156\x67\72\x20\x31\x2e\x35\155\155\x3b\12\x20\x20\40\x20\x6d\141\162\147\151\x6e\x3a\40\60\x3b\xa\40\x20\40\40\166\145\162\164\151\143\141\154\55\x61\x6c\151\x67\x6e\x3a\x20\164\x6f\160\73\xa\x20\40\40\x20\x63\x6f\x6c\157\x72\72\x20\43\60\60\60\60\60\60\x3b\xa\x20\40\175\12\40\40\56\142\x61\162\x63\x6f\x64\145\143\x65\x6c\x6c\40\173\xa\x20\x20\40\x20\164\x65\x78\164\55\x61\x6c\151\x67\156\72\40\x63\145\x6e\164\145\x72\x3b\12\40\x20\40\40\166\145\162\164\151\143\141\x6c\x2d\x61\x6c\151\147\156\72\40\x6d\x69\x64\x64\x6c\x65\x3b\12\40\x20\40\40\160\x61\144\144\151\156\x67\x3a\40\x30\73\12\40\x20\175\12\40\40\x2e\x62\x6f\162\144\145\162\x2d\165\156\x69\173\xa\x20\40\x20\40\x62\157\x72\144\x65\162\55\142\x6f\x74\x74\x6f\155\72\x31\x70\170\40\163\157\154\151\144\x20\43\64\60\x33\144\63\144\73\12\x20\40\x20\x20\x62\157\162\144\x65\162\55\x6c\x65\146\x74\72\61\160\170\x20\163\x6f\154\151\144\x20\x23\64\x30\x33\x64\x33\x64\x3b\12\x20\40\x20\40\xa\40\40\175\12\40\40\56\x62\157\162\x64\145\162\x2d\x63\145\156\164\145\x72\173\xa\40\x20\40\40\142\x6f\162\144\145\162\55\142\x6f\x74\164\x6f\155\72\61\x70\170\40\163\157\x6c\151\x64\x20\x23\x34\60\x33\144\x33\x64\73\xa\xa\x20\x20\x7d\12\40\x20\x2e\x62\157\x72\x64\x65\x72\x2d\143\145\x6e\x74\x65\162\55\x72\x69\147\x68\164\x7b\xa\40\x20\x20\x20\142\x6f\162\144\x65\x72\x2d\142\157\164\164\157\155\72\x31\160\x78\x20\x73\x6f\x6c\151\x64\x20\x23\x34\60\x33\144\63\144\x3b\12\x20\x20\40\40\142\157\x72\144\x65\x72\x2d\162\151\x67\150\164\x3a\61\160\170\40\163\157\x6c\x69\144\40\43\64\60\x33\x64\x33\144\x3b\12\x20\x20\x7d\xa\xa\x20\x20\56\x6b\141\160\x69\x74\x61\154\x7b\164\x65\x78\164\55\x74\162\x61\x6e\x73\146\157\x72\x6d\x3a\165\x70\x70\x65\162\x63\x61\x73\x65\x3b\175\xa\40\x20\12\xa\40\40\xa\74\x2f\x73\x74\x79\x6c\x65\x3e\xa\x3c\x2f\150\x65\141\x64\x3e\12\74\x62\157\x64\171\x3e\12\12\74\164\141\142\x6c\x65\40\x63\x6c\141\163\x73\x3d\42\151\x74\145\x6d\x73\x22\x20\167\151\x64\x74\150\75\42\x33\x34\60\160\170\x22\x20\x63\x65\154\154\x70\x61\144\144\151\x6e\x67\75\42\64\42\x3e\xa\40\x20\x3c\x74\x72\40\x73\164\x79\x6c\145\75\42\142\157\162\144\145\162\72\x31\160\x78\x20\163\x6f\x6c\x69\x64\40\43\64\x30\x33\144\x33\144\73\42\40\x61\154\x69\x67\x6e\x3d\x22\x63\x65\x6e\164\145\162\42\x3e\12\40\x20\x20\40\x3c\164\x64\x20\163\164\171\x6c\145\x3d\42\x62\157\x72\144\145\x72\x2d\x72\x69\x67\150\x74\72\61\x70\170\x20\163\x6f\x6c\x69\144\x20\43\64\x30\x33\144\63\x64\x3b\x22\40\x61\x6c\151\x67\x6e\x3d\42\x63\145\x6e\x74\145\162\42\x3e\12\40\x20\x20\x20\x20\40\40\74\151\155\x67\40\163\162\143\75\x22\141\163\163\145\x74\x73\x2f\151\155\x67\57" . $GlobalDataSitus[7] . "\42\x20\x77\x69\144\164\150\x3d\42\65\x30\42\40\x68\x65\x69\x67\x68\x74\75\x22\65\60\x22\x2f\76\x20\40\40\40\40\40\x20\40\x20\40\40\x20\xa\x20\40\40\40\x3c\57\164\144\76\xa\40\40\x20\x20\x3c\164\x64\40\x63\x6f\154\x73\x70\141\156\75\x22\61\42\40\141\x6c\x69\147\156\x3d\x22\143\x65\x6e\x74\145\x72\x22\40\163\164\171\x6c\x65\75\x22\x62\x6f\x72\144\x65\x72\55\142\157\164\x74\157\x6d\x3a\61\160\x78\x20\163\x6f\154\151\144\x20\x23\x34\60\x33\x64\63\x64\73\42\76\x3c\160\40\141\154\x69\147\156\75\42\x63\x65\156\164\145\x72\42\76\x3c\163\164\162\157\x6e\x67\x3e\x4b\x41\122\x54\x55\x20\x50\x45\x53\105\x52\124\101\x3c\57\163\164\x72\x6f\x6e\x67\x3e\x3c\x62\x72\x20\57\76\xa\x20\x20\40\40\x20\x20\40\40\74\x73\x74\x72\x6f\156\147\76" . $GlobalDataSitus[0] . "\x3c\x2f\163\164\x72\157\x6e\147\x3e\x3c\x73\x74\162\x6f\156\147\x3e\74\x62\x72\x3e\x54\x61\150\x75\156\40\120\145\154\141\x6a\x61\x72\141\x6e\x20" . $tahun_sekarang . "\57\40" . $tahun_selanjutnya . "\74\57\163\x74\x72\157\156\x67\76\74\57\x70\76\40\x20\40\x20\x3c\57\x74\144\x3e\12\40\40\74\57\164\162\76\12\x20\40\x3c\164\x72\x3e\12\x20\x20\x20\x20\74\x74\144\40\143\x6c\141\163\163\75\x22\142\157\x72\x64\145\162\x2d\x75\156\x69\42\x3e\x4e\157\56\40\120\145\x73\x65\162\164\x61\x20\74\57\x74\144\76\xa\xa\40\40\40\40\74\164\x64\x20\x63\154\141\x73\163\x3d\x22\142\x6f\x72\144\x65\x72\x2d\x63\145\156\x74\145\x72\55\162\x69\x67\x68\x74\42\76\x3a" . $nomor_pendaftaran . "\74\x2f\164\x64\76\12\x20\x20\x3c\57\x74\162\x3e\12\40\40\x3c\x74\162\76\xa\40\x20\x20\x20\74\x74\x64\40\x63\x6c\x61\163\x73\x3d\x22\142\x6f\162\144\145\162\x2d\165\x6e\151\x22\x3e\x4e\x61\155\x61\74\x2f\x74\144\x3e\xa\12\x20\x20\40\40\x3c\164\x64\40\x63\x6c\x61\x73\x73\75\x22\142\x6f\x72\144\145\x72\x2d\143\x65\x6e\x74\145\162\x2d\x72\151\x67\150\164\40\153\141\x70\151\x74\141\154\42\x3e\72\40" . $nama . "\74\x2f\x74\144\x3e\12\x20\x20\x3c\57\x74\162\76\xa\40\40\74\x74\162\x3e\12\x20\40\40\40\74\164\x64\40\143\x6c\141\x73\163\x3d\42\x62\157\162\x64\x65\162\55\165\156\151\42\76\101\x73\141\x6c\x20\x53\x65\x6b\157\154\141\x68\x20\74\x2f\x74\144\76\xa\x20\x20\12\x20\40\x20\x20\74\164\x64\40\x63\x6c\x61\163\x73\75\x22\x62\x6f\x72\x64\x65\x72\x2d\143\145\x6e\164\145\162\55\162\x69\x67\150\164\x20\153\x61\160\151\x74\x61\154\42\76\72\x20" . $nama_sekolah . "\74\x2f\x74\x64\76\xa\40\x20\x3c\57\164\x72\76\xa\x20\x20\74\164\x72\76\xa\x20\40\x20\x20\74\164\144\x20\x63\x6c\141\163\163\75\x22\x62\157\162\x64\145\162\x2d\165\x6e\x69\42\x3e\120\x65\154\141\x6b\x73\x61\x6e\x61\x61\156\x20\x54\145\x73\164\40\x3c\57\x74\144\76\12\xa\x20\40\x20\x20\74\164\x64\x20\143\154\x61\163\x73\75\42\142\x6f\x72\144\145\x72\x2d\x63\145\x6e\164\145\x72\55\x72\x69\147\150\164\40\x6b\x61\160\x69\x74\141\x6c\x22\76\72\x20" . $tanggal_test . "\74\x2f\164\x64\x3e\12\x20\x20\74\x2f\x74\x72\x3e\xa\x20\40\74\x74\162\x3e\12\x20\x20\40\40\74\164\x64\x20\143\x6c\141\x73\x73\75\42\x62\157\x72\x64\x65\x72\x2d\x75\156\151\x22\76\120\x75\153\165\x6c\74\57\x74\x64\76\12\x20\40\x20\x20\x3c\164\x64\x20\x63\x6c\141\163\163\x3d\42\142\x6f\x72\x64\145\162\55\143\x65\156\164\145\162\55\162\151\147\x68\x74\42\x3e\72\x20" . $waktu_test . "\74\x2f\164\x64\x3e\12\40\40\x3c\x2f\164\x72\76\12\40\40\x3c\x74\162\76\12\x20\40\x20\x20\74\x74\144\40\x61\154\151\x67\x6e\75\42\x63\x65\156\x74\x65\162\x22\40\143\x6c\x61\x73\x73\x3d\x22\x62\x6f\162\x64\145\162\55\x75\156\x69\x22\x3e\12\x20\40\40\x20\x20\x20\40\x20\x20\40\74\151\x6d\147\x20\163\162\x63\x3d\x22\143\x6f\x6e\164\145\156\164\57\146\157\164\x6f\x2f" . $foto . "\42\x20\167\x69\144\164\x68\x3d\42\x36\60\x22\x20\150\145\x69\147\x68\164\75\x22\x38\x30\x22\x2f\x3e\40\x20\40\x20\x20\40\40\40\40\40\x20\40\12\x20\40\x20\40\74\x2f\x74\144\x3e\12\40\x20\x20\x20\74\164\144\x20\143\x6c\x61\163\163\x3d\x22\x62\157\162\x64\x65\x72\55\x63\x65\156\x74\145\162\x2d\162\x69\147\150\164\40\153\x61\x70\151\164\141\154\42\40\x63\157\x6c\163\160\x61\x6e\75\x22\x31\42\76" . $materi . "\74\x2f\164\x64\x3e\xa\40\x20\x3c\x2f\164\x72\x3e\xa\x3c\57\164\x61\142\154\145\x3e\12\xa\x3c\57\x62\157\144\171\76\xa\74\x2f\x68\x74\155\154\76\12"; goto FqRy8; Jy927: ?>