package main

import (
	"fmt"
	"html/template"
	"net/http"
)

func homepage(w http.ResponseWriter, r *http.Request) {
	t, err := template.ParseFiles("./index.html")
	if err != nil {
		panic(err)
		return
	}

	err = t.Execute(w, nil)
	if err != nil {
		fmt.Printf("%v", err)
	}
}

func main() {
	fmt.Printf("starting...\n")
	http.HandleFunc("/", homepage)
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("static"))))
	err := http.ListenAndServe(":80", nil)
	if err != nil {
		fmt.Printf("%v", err)
	}
}
