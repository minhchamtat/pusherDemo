import React, { Component } from 'react'
import axios from 'axios'

class Edit extends Component {
  constructor (props) {
    super(props)
    console.log(props)
    this.state = {
      title: '',
      body: '',
    }

    this.handleTitle = this.handleTitle.bind(this)
    this.handleBody = this.handleBody.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
  }

  componentDidMount () {
    let url = 'products/' + this.props.match.params.id + '/edit'
    axios.get(url)
      .then(response => {
        this.setState(response.data)
      })
      .catch(function (error) {
        console.log(error)
      })
  }

  handleTitle (e) {
    this.setState({
      title: e.target.value
    })
  }

  handleBody (e) {
    this.setState({
      body: e.target.value
    })
  }

  handleSubmit (e) {
    e.preventDefault()
    let url = 'products/' + this.props.match.params.id
    const data = {
      title: this.state.title,
      body: this.state.body,
    }
    axios.patch(url, data)
      .then(response => {
        this.props.history.push('/product')
        console.log('châm đã update')
      })
      .catch(function (error) {
        console.log(error)
      })
  }

  render () {
    return (
      <div>
        <h1>Edit Product</h1>
        <form onSubmit={this.handleSubmit}>
          <div className='form-group'>
            <label htmlFor='title'>Title</label>
            <input type='text' className='form-control' id='title' placeholder='Title'
              value={this.state.title} onChange={this.handleTitle} required />
          </div>
          <div className='form-group'>
            <label htmlFor='body'>Body</label>
            <input type='text' className='form-control' id='body' placeholder='Body'
              value={this.state.body} onChange={this.handleBody} required />
          </div>
          <button type='submit' className='btn btn-primary'>Update Product</button>
        </form>
      </div>
    )
  }
}
export default Edit