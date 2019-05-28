import React, { Component } from 'react';
import axios from 'axios';

class Add extends Component {
	constructor (props) {
		super(props)
	    this.state = {
	      title: '',
	      body: '',
	    }
	    
	    this.handleChange = this.handleChange.bind(this)
	    this.handleSubmit = this.handleSubmit.bind(this)
	}

	//tạo các handlechange
	handleChange(e){
	    this.setState({
	        [e.target.id]: e.target.value,
	    })
	}

	//submit
	handleSubmit(e) {
		e.preventDefault()
	    let url = 'products'
	    const data = {
	      title: this.state.title,
	      body: this.state.body,
	    }
	    axios.post(url, data)
	      .then(response => {
	        this.props.history.push('/product')
	      })
	      .catch(function (error) {
	        console.log(error)
	      })
	}

    render() {
        return (
        <div>
            <h1>Create A Product</h1>
            <form onSubmit={this.handleSubmit}>
            	<div className='form-group'>
            		<label htmlFor='title'>Title</label>
            		<input type='text' className='form-control' id='title' placeholder='Title'  
            		value={this.state.title} onChange={this.handleChange} required />
            	</div>
            	<div className='form-group'>
            		<label htmlFor='body'>Body</label>
            		<input type='body' className='form-control' id='body' placeholder='Body'
            		value={this.state.body} onChange={this.handleChange} required />
            	</div>
		        <button type='submit' className='btn btn-primary'>Add Product</button>
            </form>
        </div>
        )
    }
}

export default Add