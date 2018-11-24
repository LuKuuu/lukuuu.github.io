package main

import (
	"fmt"
	"net/http"
	"html/template"
)


func homepage(w http.ResponseWriter, r *http.Request) {


	t, err := template.ParseFiles("./index.html")
	if err != nil {
		panic(err)
		return
	}

	t.Execute(w, nil)

}


func main(){
	fmt.Printf("starting...\n")
	http.HandleFunc("/", homepage) //展示页面
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))
	err:=http.ListenAndServe(":80", nil) //创建服务器
	if err!=nil{
		fmt.Printf("%v",err)
	}
}


