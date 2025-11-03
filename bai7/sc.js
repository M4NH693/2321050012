let danhSachPhim = [
    {
        id : 1,
        tenPhim :"mưa đỏ",
        namPhatHanh : 2025,
        tuoi : 16,
        thoiLuong : 2, 
        quocGia : "Việt Nam",
        poster : "/bai7/fpt (1)/img/350x495-muado.jpg",
        theLoai : "Mới ra mắt"
    },

     {
        id : 2,
        tenPhim :"người đẹp và quái vật",
        namPhatHanh : 2023,
        tuoi : 10,
        thoiLuong : 0.5, 
        quocGia : "Nhật Bản",
        poster : "/bai7/fpt (1)/img/wallhaven-v937q5_188x268.png",
        theLoai : "Alime"
    }
]

 let phimHienTai = danhSachPhim[0];

 let banner = document.getElementsByClassName('banner')[0];

 function chon(idPhim){
    for(let i = 0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id==idPhim){
            banner.src = danhSachPhim[i].poster;
        }
            
    }
 }
