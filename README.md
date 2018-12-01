# app laboratorium with yii2

Role User :
1. Admin
2. Super Admin (Guru)
3. Siswa/i

Module :
Pendaftaran Pengguna Laboratorium
Penambahan Stock Alat dan Bahan Lab
Peminjaman dan pengembalian ALat dan Bahan Lab
Penjadwalan Pengguanaan Lab
Penambahan kelas dengan pembagian jadwal pemakaian Lab

Syntax
The syntax of internal DTD is as shown:

<!DOCTYPE root-element [element-declarations]>
where root-element is the name of root element and element-declarations is where you declare the elements.

Example
Following is a simple example of internal DTD:

<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<!DOCTYPE address [
   <!ELEMENT address (name,company,phone)>
   <!ELEMENT name (#PCDATA)>
   <!ELEMENT company (#PCDATA)>
   <!ELEMENT phone (#PCDATA)>
]>
<address>
   <name>Tanmay Patil</name>
   <company>TutorialsPoint</company>
   <phone>(011) 123-4567</phone>
</address>
